<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\HttpNotFoundException;

use ITR\NewsBundle\Form\CommentType;

use ITR\NewsBundle\Entity\Category;

class MainpageController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction(Request $request, $category = NULL)
    {
        //$user = $this->get('security.context')->getToken()->getUser();
        //var_dump($user->getRoles());
         if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException('Unable to access this page!');
        }
        $em = $this->getDoctrine()->getManager();
        
        if($request->isXmlHttpRequest()){
            $news = $this->getNews($category, $em);
            $context = array('news' => $this->getPagination($news,20));
        return $this->render('NewsBundle:Mainpage:news.html.twig', $context); 
        }
    	$user = $this->get('security.context')->getToken()->getUser();       
        $categories = $em->getRepository('NewsBundle:Category')->findAllOrderedByName();
        $dispatches = $user->getCategory();
        $news = $this->getNews($category, $em);
        $popular_news =$em->getRepository('NewsBundle:News')->findTopNewsOrderedByPopularity(); 
        
        $context = array( 'username' => $user->getUserName(), 
                        'categories' => $categories, 
                        'news' => $this->getPagination($news,20),
                        'dispatches' => $dispatches,
                        'popular_news' => $popular_news);

        return $this->render('NewsBundle:Mainpage:index.html.twig',$context);
        
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function archiveAction(Request $request)
    {

            $date_elements  = explode("/", $_POST['date']);


            $date1=date(DATE_W3C, mktime(0,0,0,$date_elements[0],$date_elements[1], $date_elements[2]));
            $date2=date(DATE_W3C, mktime(0,0,0,$date_elements[0],$date_elements[1]+1, $date_elements[2]));
            $em = $this->getDoctrine()->getManager();

            $user = $this->get('security.context')->getToken()->getUser();
            $categories = $em->getRepository('NewsBundle:Category')->findAllOrderedByName();
            $dispatches = $user->getCategory();
            $popular_news =$em->getRepository('NewsBundle:News')->findTopNewsOrderedByPopularity();

            $news = $em->getRepository('NewsBundle:News')->findNewsByDate($date1,$date2);
            if(empty($date_elements))
            {
                $news=NULL;
            }
            $this->getPagination($news);
            $context = array( 'username' => $user->getUserName(),
                'categories' => $categories,
                'news' => $this->getPagination($news),
                'dispatches' => $dispatches,
                'popular_news' => $popular_news);
            return $this->render('NewsBundle:Mainpage:archive.html.twig',$context);
    }
    /**
    * @Security("has_role('ROLE_USER')")
    */
    public function orderAllAction(Request $request, $key)
    {
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            
            switch ($key){
                case 'popular':
                    $news = $em->getRepository('NewsBundle:News')->findAllNewsOrderedByPopularity();
                    break;
                case 'date':
                    $news = $em->getRepository('NewsBundle:News')->findAllNewsOrderedByDate();
                    break;
                default:
                     throw $this->createNotFoundException('Unable to find page.');        
            }
            $context = array('news' => $this->getPagination($news,20));
        return $this->render('NewsBundle:Mainpage:news.html.twig', $context);
        }else{
            throw $this->createNotFoundException('Unable to find page.');
        } 
    }
    /**
    * @Security("has_role('ROLE_USER')")
    */    
    public function orderCategoryAction(Request $request, $key, $category = NULL)
    {
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            if(!$current_category = $em->getRepository('NewsBundle:Category')->findOneBy(array('category_name'=>$category))){
                 throw $this->createNotFoundException('Unable to find page.');
            }
            switch ($key){
                case 'popular':
                    $news = $em->getRepository('NewsBundle:News')->findNewsByCategoryOrderedByPopularity($current_category);
                    break;
                case 'date':
                    $news = $em->getRepository('NewsBundle:News')->findNewsByCategoryOrderedByDate($current_category);
                    break;
                default:
                     throw $this->createNotFoundException('Unable to find page.');        
            }
            
            $context = array('news' => $this->getPagination($news,20));
        return $this->render('NewsBundle:Mainpage:news.html.twig', $context);
        }else{
            throw $this->createNotFoundException('Unable to find page.');
        } 
    }
    
    private function getPagination($object,$pages=10){
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $object,
            $this->get('request')->query->get('page', 1)/*page number*/,
            $pages/*limit per page*/
        );
        return $pagination;
    }

    private function getNews($category, $em){
        if(!empty($category)){
            if(!$current_category = $em->getRepository('NewsBundle:Category')->findOneBy(array('category_name'=>$category))){
                throw $this->createNotFoundException('Unable to find entity.');
            }
            $news = $em->getRepository('NewsBundle:News')->findNewsByCategoryOrderedByDate($current_category->getId());
        } else{
            $news = $em->getRepository('NewsBundle:News')->findAllNewsOrderedByDate();
        }
        return $news;
    }
    
    /**
    * @Security("has_role('ROLE_USER')")
     *
     *
    */
   public function currentNewsItemAction($id, Request $request)
    {
        if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException('Unable to access this page!');
        }
        $form = $this->createForm(new CommentType());
        $form->handleRequest($request);


        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();        
        $categories= $em->getRepository('NewsBundle:Category')->findAllOrderedByName();
        $dispatches = $user->getCategory();        
        if (!$news = $em->getRepository('NewsBundle:News')->find($id)) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }
        if ($form->isValid()) {
            $comment = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $comment->setUsers($user);
            $comment->setNews($news);
            $comment->setPublicationDate(new \DateTime('now'));
            $em->persist($comment);
            $em->flush();
            return $this->redirect($this->generateUrl('current_news',array('id' => $id)));
        }
        $related_news = $news->getNews();
        if (!($news->getUsers()->contains($user))){
            $news->addUser($user);
            $em->flush();
        }
        $comments =  $em->getRepository('NewsBundle:Comment')->findCommentsByNewsOrderedByDate($news);

        $context = array( 'username' => $user->getUserName(), 
            'categories' => $categories,
            'news' => $news,
            'dispatches' => $dispatches,
            'related_news' =>$related_news,
            'comments' =>$this->getPagination($comments,5),
            'form' => $form->createView());
        
        return $this->render('NewsBundle:Mainpage:currentNews.html.twig',$context);
    }
}
