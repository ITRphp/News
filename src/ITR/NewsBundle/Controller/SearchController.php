<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function searchAction(Request $request,$key)
    {	
	        $finder = $this->container->get('fos_elastica.finder.search.news');
	        $news = $finder->find($key);
	        $paginator = $this->get('knp_paginator');
        	$pagination = $paginator->paginate(
	            $news,
	            $this->get('request')->query->get('page', 1)/*page number*/,
	            20/*limit per page*/
       		 );

	        $context = array('news' => $pagination);
	        return $this->render('NewsBundle:Mainpage:news.html.twig', $context);   
    }
}
