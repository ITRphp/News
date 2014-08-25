<?php
namespace ITR\NewsBundle\Command;


use ITR\NewsBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SendEmailCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('NewsBundle:SendEmails')
            ->setDescription('Send emails to subscribers')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $context = $this->getContainer()->get('router')->getContext();
        $context->setHost('news.ru');
        $context->setScheme('http');
        $context->setBaseUrl('/web');

        $em = $this->getContainer()->get('doctrine')->getManager();
        $users = $em->getRepository('NewsBundle:User')->findAllSubscribedUsers();
        if(!$users){
            throw $this->createNotFoundException('Unable to find users');
        }
        $output->write('Emails have sent to users: ');
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
            unset($dispatch);         
            $this->sendEmail($user, $context);
            $output->write($user->getUserName()." ");
        }
    }

    public function sendEmail($user,$context){
        $user_name=$user->getUserName();
        $message = \Swift_Message::newInstance()
                ->setSubject("Hello $user_name")->setFrom("news.dispatch.itr@gmail.com")
                ->setTo($user->getUserEmail()) 
                ->setBody($this->getContainer()->get('templating')->render('NewsBundle:Newsletter:send.html.twig',$context),
                        'text/html');
         $this->getContainer()->get('mailer')->send($message);
    }
}