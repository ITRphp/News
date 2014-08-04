<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use ITR\NewsBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        return $this->render('NewsBundle:Secured:hello.html.twig', array(
            // имя, введённое пользователем в последний раз
            'user' => $user));
    }
}
