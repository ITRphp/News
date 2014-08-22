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
        $text = 'Emails send to';
        $em = $this->getContainer()->get('doctrine')->getManager();
        $user = $em->getRepository('NewsBundle:User')->find(2);
        $name = $user -> getUserName();
        $output->writeln($text.' '.$name);
        //$email = $user->getUserEmail();
        /*$message = \Swift_Message::newInstance()
                ->setSubject("Hello $user_name")->setFrom("news.dispatch.itr@gmail.com")
                ->setTo($user_email) 
                ->setBody($this->renderView('NewsBundle:PasswordRecovery:MailBody.html.twig',
                        array('name' => $user_name, 'access_hash' => $access_hash) ),
                        'text/html');
        $this->get('mailer')->send($message);*/
    }
}