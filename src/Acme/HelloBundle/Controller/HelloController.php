<?php
namespace Acme\HelloBundle\Controller;

use Acme\HelloBundle\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction()
    {
        $product = new Products();
        $product->setName('A foo Bar');
        $product->setPrice('20');
        $product->setDescription('lalala');
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();
        
    return new Response('Created product id '.$product->getId());
    //return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $product->getId()));
        
    }
}
