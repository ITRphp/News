<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class AuthenticationController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // получить ошибки логина, если таковые имеются
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('NewsBundle:Authentication:login.html.twig', array(
            // имя, введённое пользователем в последний раз
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));       
    }
    public function userAction($username)
    {
        return $this->render('NewsBundle:Authentication:user.html.twig', array(
            // имя, введённое пользователем в последний раз
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }

}
