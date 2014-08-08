<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainpageController extends Controller
{
    public function indexAction()
    {
        return $this->render('NewsBundle:Mainpage:index.html.twig', array(
                // ...
            ));    }

}
