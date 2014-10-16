<?php

namespace ITR\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogController extends Controller
{
    public function showAction()
    {   $user = $this->get('security.context')->getToken()->getUser();
        $context = array( 'username' => $user->getUserName(),
            );
        return $this->render('CatalogBundle:Catalog:show.html.twig', $context);
    }

    public function showGoodsAction()
    {

    }
}
