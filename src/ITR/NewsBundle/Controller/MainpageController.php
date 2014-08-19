<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ITR\NewsBundle\Entity\Category;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\HttpNotFoundException;

class MainpageController extends Controller
{
    /**
    * @Security("has_role('ROLE_USER')")
    */
    public function indexAction($category = NULL)
    {
         if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException('Unable to access this page!');
        }
    	$user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository('NewsBundle:Category')->findAllOrderedByName();
        $dispatches = $user->getCategory();
        $news = $this->getNews($category, $em);
        
        $popular_news =$em->getRepository('NewsBundle:News')->findTopNewsOrderedByPopularity(); 
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $news,
            $this->get('request')->query->get('page', 1)/*page number*/,
            20/*limit per page*/
        );
        
        $context = array( 'username' => $user->getUserName(), 
                        'categories' => $categories, 
                        'news' => $pagination,
                        'dispatches' => $dispatches,
                        'popular_news' => $popular_news);

        return $this->render('NewsBundle:Mainpage:index.html.twig',$context);
        
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

    public function currentNewsItemAction($id)
    {
        if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException('Unable to access this page!');
        }
        
        $user = $this->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $categories= $em->getRepository('NewsBundle:Category')->findAllOrderedByName();
        $dispatches = $user->getCategory();
        $news = $em->getRepository('NewsBundle:News')->find($id);
        $views_list=$news->getUsers();
        
        if (!($views_list->contains($user))){
            $news->addUser($user);
            $em->flush();
        }
        
        $context = array( 'username' => $user->getUserName(), 
            'categories' => $categories,
            'news' => $news,
            'dispatches' => $dispatches);

        return $this->render('NewsBundle:Mainpage:currentNews.html.twig',$context);
    }
}
