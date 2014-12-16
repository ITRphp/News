<?php
namespace ITR\CatalogBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

use ITR\CatalogBundle\Entity\GoodsCategoryRepository;
use Doctrine\ORM\EntityManager;

class Builder extends ContainerAware
{

    public function categoryMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');
        $em = $this->container->get('doctrine')->getManager();
        $categories = $em->getRepository('CatalogBundle:GoodsCategory')->findAllParents();
       // $menu->addChild('All news', array('route' =>'mainpage'));
        foreach ($categories as $category){
            $menu->addChild($category->getCategoryName(), array(
                'class' => 'tree-toggler nav-header',
                'route' =>'catalog_category',
                'routeParameters' => array('category' => strtolower($category->getCategoryName()))));
        }
        return $menu;
    }

}