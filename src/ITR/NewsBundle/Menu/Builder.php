<?php
namespace ITR\NewsBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
 
        $menu->addChild("User")
             ->setAttribute('dropdown', true);
 
        $menu['User']->addChild('Subscribe', array('uri' => '#'))
                ->setAttribute('divider_append', true);
        $menu['User']->addChild('Logout', array('route' => 'logout'));
        
 
        $menu->addChild('Language')
             ->setAttribute('dropdown', true)
             ->setAttribute('divider_prepend', true);
        $menu['Language']->addChild('English', array('uri' => '#'));
        
       //$menu->addChild('NewsBundle:Menu:search.html.twig');
 
        return $menu;
    }
    public function adminMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        
        $menu->addChild( 'Main page', array('route' => 'mainpage'));
 
        $menu->addChild('Users')
             ->setAttribute('dropdown', true);
 
        $menu['Users']->addChild('Users list', array('route' => '_all_users'));
        
        $menu->addChild('Categories')
             ->setAttribute('dropdown', true)
             ->setAttribute('divider_prepend', true);
        
        $menu['Categories']->addChild('All categories', array('route' => '_all_categories'));
        $menu['Categories']->addChild('Add category', array('route' => '_add_category'));

        $menu->addChild('Content')
             ->setAttribute('dropdown', true)
             ->setAttribute('divider_prepend', true);
 
        $menu['Content']->addChild('News list', array('route' => '_all_news'));
        $menu['Content']->addChild('Add news', array('route' => 'news_new'));
        
        $menu->addChild('Logout', array('route' => 'logout'));
  
        return $menu;
    }

}