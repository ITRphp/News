<?php

namespace ITR\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogController extends Controller
{
    public function showAction($category = Null)
    {   $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $images = $em->getRepository('CatalogBundle:Image')->findAll();

        $categories = $em->getRepository('CatalogBundle:GoodsCategory')->findAllParents();
        $context = array( 'username' => $user->getUserName(),
            'images' => $images,
            'categories' => $categories
            );
        return $this->render('CatalogBundle:Catalog:index.html.twig', $context);
    }

    public function listAction($category = Null)
    {   $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CatalogBundle:GoodsCategory')->findAllParents();
        if($category != null){
            $category_t = $em->getRepository('CatalogBundle:GoodsCategory')->findOneBy(
                array('tableName' => $category)
            );
            $goods = $em->getRepository('CatalogBundle:Goods')->findBy(
                array('goods_category' => $category_t)
            );

        }
        $context = array( 'username' => $user->getUserName(),
            'goods' => $this->getPagination($goods),
            'categories' => $categories
        );
        return $this->render('CatalogBundle:Catalog:'.strtolower($category_t->getTableName().'.html.twig'), $context);
    }

    public function showGoodsAction()
    {

    }
    private function menu(){

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
