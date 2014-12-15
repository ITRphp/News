<?php

namespace ITR\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogController extends Controller
{
    public function showAction($category = Null)
    {   $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        if($category != null){
            $category_t = $em->getRepository('CatalogBundle:GoodsCategory')->findOneBy(
                array('categoryName' => $category)
            );
//            $property = $em->getRepository('CatalogBundle:'.$category_t->getTableName())->findAll();
            $goods = $em->getRepository('CatalogBundle:Goods')->findBy(
                array('goods_category' => $category_t)
            );

        }

        $context = array( 'username' => $user->getUserName(),
            'goods' => $goods
            );
        return $this->render('CatalogBundle:Catalog:index.html.twig', $context);
    }

    public function listAction($category = Null)
    {   $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        if($category != null){
            $category_t = $em->getRepository('CatalogBundle:GoodsCategory')->findOneBy(
                array('categoryName' => $category)
            );
//            $property = $em->getRepository('CatalogBundle:'.$category_t->getTableName())->findAll();
            $goods = $em->getRepository('CatalogBundle:Goods')->findBy(
                array('goods_category' => $category_t)
            );

        }

        $context = array( 'username' => $user->getUserName(),
            'goods' => $goods
        );
        return $this->render('CatalogBundle:Catalog:index.html.twig', $context);
    }

    public function showGoodsAction()
    {

    }

    private function getPagination($object,$pages=10){
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $object,
            $this->get('request')->query->get('page', 1)/*page number*/,
            $pages/*limit per page*/
        );
        return $pagination;
    }
}
