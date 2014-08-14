<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction() 
    {
    	if (true === $this->get('security.context')->isGranted('ROLE_USER')){
    		return $this->redirect($this->generateUrl('mainpage'));
    	}
    	else
    	{
        	return $this->render('NewsBundle:Welcome:index.html.twig');
        }
    }
}
