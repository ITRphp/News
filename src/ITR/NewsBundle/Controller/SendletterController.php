<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class SendletterController extends Controller
{
    public function indexAction()
    {
         if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
            throw $this->createAccessDeniedException('Unable to access this page!');
        }
        $em = $this->getDoctrine()->getManager();        
    	     
        
        $users = $em->getRepository('NewsBundle:User')->findAllSubscribedUsers();
        if(!$users){
            throw $this->createNotFoundException('Unable to find users');
        }
        foreach ($users as $user){
            $categories = $user->getCategory();
            
            foreach ($categories as $category){
                $news = $em->getRepository('NewsBundle:News')->findNewsByCategoryOrderedByPopularity($category,3);
                if(!empty($news)){
                    $dispatch[$category->getCategoryName()]=$news;
                }
            }
            $context = array( 'username' => $user->getUserName(), 
                        'categories' => $dispatch);
            $dis=$dispatch; 
            unset($dispatch);             
            $this->sendEmail($user, $context);
           
        }
        $user = $this->get('security.context')->getToken()->getUser();  
          $context = array( 'username' => $user->getUserName(), 
                        'categories' => $dis);

        return $this->render('NewsBundle:Newsletter:send.html.twig',$context);
        
    }
    
    public function sendEmail($user,$context){
        $user_name=$user->getUserName();
        $message = \Swift_Message::newInstance()
                ->setSubject("Hello $user_name")->setFrom("news.dispatch.itr@gmail.com")
                ->setTo($user->getUserEmail()) 
                ->setBody($this->renderView('NewsBundle:Newsletter:send.html.twig',$context),
                        'text/html');
         $this->get('mailer')->send($message);
    }
}