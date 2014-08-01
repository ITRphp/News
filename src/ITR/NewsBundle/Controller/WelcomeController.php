<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction() 
    {
        return $this->render('NewsBundle:Welcome:index.html.twig');
        
    }
}
