<?php

namespace ITR\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class GoodsCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categoryName;

    /**
     * @var string
     */
    private $tableName;

    /**
     * @param string $tableName
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    /**
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    
        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $goods;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->goods = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add goods
     *
     * @param \ITR\CatalogBundle\Entity\Goods $goods
     * @return GoodsCategory
     */
    public function addGood(\ITR\CatalogBundle\Entity\Goods $goods)
    {
        $this->goods[] = $goods;
    
        return $this;
    }

    /**
     * Remove goods
     *
     * @param \ITR\CatalogBundle\Entity\Goods $goods
     */
    public function removeGood(\ITR\CatalogBundle\Entity\Goods $goods)
    {
        $this->goods->removeElement($goods);
    }

    /**
     * Get goods
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGoods()
    {
        return $this->goods;
    }
}
