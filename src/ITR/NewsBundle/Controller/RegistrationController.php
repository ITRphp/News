<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ITR\NewsBundle\Form\RegistrationType;
use ITR\NewsBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    public function newAction()
    {     
        $user = new User();
        $form = $this->createForm(new RegistrationType(), $user);
         return $this->render('NewsBundle:Registration:index.html.twig', array(
            'user' => $user,
            'form'   => $form->createView(),
        ));
    }
    
    public function indexAction(Request $request)
    {   
        $user = new User();
        $form = $this->createForm(new RegistrationType(), $user);

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            

        if ($form->isValid()) {   
            $user->setUserRole('ROLE_USER');
            $em = $this->getDoctrine()->getManager(); 
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('_welcome'));
        }
    }
    return $this->render('NewsBundle:Registration:index.html.twig', array(
            'user' => $user,
            'form'   => $form->createView(),
        ));
    }

}
