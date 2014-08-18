<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ITR\NewsBundle\Form\RegistrationType;
use ITR\NewsBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class RegistrationController extends Controller
{    
    public function indexAction(Request $request)
    {   
        if (true === $this->get('security.context')->isGranted('ROLE_USER')){
            return $this->redirect($this->generateUrl('mainpage'));
        }
        
        $user = new User();
        $form = $this->createForm(new RegistrationType(), $user);

        if ($request->getMethod() == 'POST') {
            $form->bind($request);            

            if ($form->isValid()) {
                $hash = md5($user->getUserName().$user->getUserEmail());
                $user->setUserRole('ROLE_USER');
                $user->setUserActive(FALSE);
                $user->setUserHash($hash);
                $em = $this->getDoctrine()->getManager(); 
                $em->persist($user);
                $em->flush();

                $this->sendEmail($user, $hash);

            return $this->redirect($this->generateUrl('_welcome'));
                
            }  
        }
    return $this->render('NewsBundle:Registration:index.html.twig', array(
            'user' => $user,
            'form'   => $form->createView(),
        ));
    }
    public function sendEmail($user,$hash){
        $link = "http://localhost/News/web/app_dev.php/activate?access=".$hash;
        $message = \Swift_Message::newInstance()
                ->setSubject("Registration on LocalNews")->setFrom("news.dispatch.itr@gmail.com")
                ->setTo('beauty-93@inbox.ru') 
                ->setBody($this->renderView('NewsBundle:Registration:MailBody.html.twig',
                        array('name' => $user->getUserName(), 'link' => $link) ),
                        'text/html');
         $this->get('mailer')->send($message);
    }
    public function activationAction(Request $request){
        
        if ($request->getMethod() == 'GET') {
            $hash = filter_input(INPUT_GET, "access");
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('NewsBundle:User')->findOneBy(array('user_hash' => $hash));
            
            if (!$user) {
                throw $this->createNotFoundException('Unable to find User.');
            }
           
            $user->setUserActive(TRUE);
            $user->setUserHash(' ');
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', $this->get('translator')->trans('Registered'));
            return $this->redirect($this->generateUrl('_welcome'));  
        } 
    }
}
