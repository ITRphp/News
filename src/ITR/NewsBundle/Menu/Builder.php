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
            
            $menu->addChild('Categories')
                 ->setAttribute('dropdown', true)
                 ->setAttribute('divider_prepend', true);
            
            $menu['Categories']->addChild('All categories', array('route' => 'category'));
            $menu['Categories']->addChild('Add category', array('route' => 'category_new'));
            
            
        }
        $menu->addChild('Content')
             ->setAttribute('dropdown', true)
             ->setAttribute('divider_prepend', true);
 
        $menu['Content']->addChild('News list', array('route' => 'news'));
        $menu['Content']->addChild('Add news', array('route' => 'news_new'));
        
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