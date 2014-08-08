<?php
namespace ITR\NewsBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
 
        $menu->addChild('User')
             ->setAttribute('dropdown', true);
 
        $menu['User']->addChild('Profile', array('uri' => '#'))
                     ->setAttribute('divider_append', true);
        $menu['User']->addChild('Logout', array('uri' => '#'));
 
        $menu->addChild('Language')
             ->setAttribute('dropdown', true)
             ->setAttribute('divider_prepend', true);
 
        $menu['Language']->addChild('Deutsch', array('uri' => '#'));
        $menu['Language']->addChild('English', array('uri' => '#'));
 
        return $menu;
    }
    public function adminMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
 
        $menu->addChild('User')
             ->setAttribute('dropdown', true);
 
        $menu['User']->addChild('Profile', array('uri' => '#'))
                     ->setAttribute('divider_append', true);
        $menu['User']->addChild('Logout', array('uri' => '#'));
 
        $menu->addChild('Language')
             ->setAttribute('dropdown', true)
             ->setAttribute('divider_prepend', true);
 
        $menu['Language']->addChild('Deutsch', array('uri' => '#'));
        $menu['Language']->addChild('English', array('uri' => '#'));
 
        return $menu;
    }

}