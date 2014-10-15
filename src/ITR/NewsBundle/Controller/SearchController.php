<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function searchAction(Request $request,$key)
    {	
    		//$key = $request->request->get('key');
    		//$key = $_GET['key'];
    		//$key="mama";
	        $finder = $this->container->get('fos_elastica.finder.search.news');
	        $news = $finder->find($key);
	        $paginator = $this->get('knp_paginator');
        	$pagination = $paginator->paginate(
	            $news,
	            $this->get('request')->query->get('page', 1)/*page number*/,
	            20/*limit per page*/
       		 );

	        $context = array(// 'username' => $user->getUserName(), 
                       // 'categories' => $categories, 
                        'news' => $pagination);
                        //'dispatches' => $dispatches,
                        //'popular_news' => $popular_news);
	        return $this->render('NewsBundle:Mainpage:news.html.twig', $context);   
    }
}
