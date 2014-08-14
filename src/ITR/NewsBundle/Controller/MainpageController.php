<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ITR\NewsBundle\Entity\Category;

class MainpageController extends Controller
{
	public function indexAction() 
    {

    	$user = $this->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $categories= $em->getRepository('NewsBundle:Category')->findAllOrderedByName();
        
        $news = $em->getRepository('NewsBundle:News')->findAll();
        
        $context = array( 'username' => $user->getUserName(), 'categories' => $categories, 'news' => $news);

        return $this->render('NewsBundle:Mainpage:index.html.twig',$context);
        
    }
    public function newsAction($category)
    {   
         
        $user = $this->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository('NewsBundle:Category')->findAllOrderedByName();
        $current_category = $em->getRepository('NewsBundle:Category')->findOneBy(array('category_name'=>$category));
                
        
        $news = $em->getRepository('NewsBundle:News')->findNewsByCategoryOrderedByDate($current_category->getId());
        $context = array( 'username' => $user->getUserName(), 'categories' => $categories, 'news' => $news);
        
        return $this->render('NewsBundle:Mainpage:index.html.twig',$context);
    }
}
