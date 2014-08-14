<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainpageController extends Controller
{
	public function indexAction() 
    {

    	$user = $this->get('security.context')->getToken()->getUser();

    	$context = array( 'username' => $user->getUserName());

        return $this->render('NewsBundle:Mainpage:index.html.twig',$context);
        
    }
}
