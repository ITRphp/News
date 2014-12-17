<?php
namespace ITR\NewsBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManager;

class Builder extends ContainerAware
{
    
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
 
        $menu->addChild("User")
             ->setAttribute('dropdown', true);
 
        $menu['User']->addChild('Subscribe', array('uri' => '#'))
                ->setAttribute('divider_append', true)
                ->setAttribute('data-toggle', "modal")
                ->setAttribute('data-target', "#basicModal");
        $menu['User']->addChild('Logout', array('route' => 'logout'));

 
        $menu->addChild('Language')
             ->setAttribute('dropdown', true)
             ->setAttribute('divider_prepend', true);
        $menu['Language']->addChild('English', array('uri' => '#'));
        $search = $this->container->get('templating')->render('NewsBundle:Menu:input.html.twig');
        $menu->addChild($search,array(
        'extras' => array(
          'safe_label' => true
        )));
        $menu->addChild("Shopping", array('route' => 'catalog_homepage'));

        if ($this->container->get('security.context')->isGranted('ROLE_MANAGER')) {
            $menu->addChild("edit.mode", array('route' => 'news'))
                ->setAttribute('id', 'right');
        }
 
        return $menu;
    }
    public function adminMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        
        $menu->addChild( 'Main page', array('route' => 'mainpage'));
        
        if ($this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            $menu->addChild('Users', array('route' => 'user'));
            
            $menu->addChild('News Categories')
                 ->setAttribute('dropdown', true)
                 ->setAttribute('divider_prepend', true);
            
            $menu['News Categories']->addChild('All categories', array('route' => 'category'));
            $menu['News Categories']->addChild('Add category', array('route' => 'category_new'));
            
            
        }
        $menu->addChild('News Content')
             ->setAttribute('dropdown', true)
             ->setAttribute('divider_prepend', true)
        ->setAttribute('caret', true);
 
        $menu['News Content']->addChild('News list', array('route' => 'news'));
        $menu['News Content']->addChild('Add news', array('route' => 'news_new'));

        $menu->addChild('Catalog')
            ->setAttribute('dropdown', true)
            ->setAttribute('divider_prepend', true);

        $menu['Catalog']->addChild('Goods list', array('route' => 'goods'));
        $menu['Catalog']->addChild('Add goods', array('route' => 'goods_new'));
        $menu['Catalog']->addChild('Category List', array('route' => 'goodscategory'));
        $menu['Catalog']->addChild('Add category', array('route' => 'goodscategory_new'));
        $menu['Catalog']->addChild('Sellers list', array('route' => 'admin_seller'));
        $menu['Catalog']->addChild('Add seller', array('route' => 'admin_seller_new'));

        $menu->addChild('Goods')
            ->setAttribute('dropdown', true)
            ->setAttribute('divider_prepend', true)
            ->setAttribute('caret', true);
        $em = $this->container->get('doctrine')->getManager();
        $categories = $em->getRepository('CatalogBundle:GoodsCategory')->findAllChildren();

        foreach ($categories as $category){
            $menu['Goods']->addChild($category->getCategoryName(), array('route' =>$category->getTableName(),
                'routeParameters' => array('category' => strtolower($category->getTableName()))));
        }



        $menu->addChild('Logout', array('route' => 'logout'));
  
        return $menu;
    }
    
    public function categoryMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-stacked');
        $em = $this->container->get('doctrine')->getManager();
        $categories = $em->getRepository('NewsBundle:Category')->findAllOrderedByName();
        $menu->addChild('All news', array('route' =>'mainpage'));
        foreach ($categories as $category){
             $menu->addChild($category->getCategoryName(), array('route' =>'category_news', 
                 'routeParameters' => array('category' => strtolower($category->getCategoryName()))));
        }
        return $menu;
    }


}