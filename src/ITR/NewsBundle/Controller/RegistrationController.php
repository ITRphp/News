<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('NewsBundle:Registration:index.html.twig', array(
                // ...
            ));    }

}
