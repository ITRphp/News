<?php

namespace ITR\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goods
 */
class Goods
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $goods_id;

    /**
     * @param int $goods_id
     */
    public function setGoodsId($goods_id)
    {
        $this->goods_id = $goods_id;
    }

    /**
     * @return int
     */
    public function getGoodsId()
    {
        return $this->goods_id;
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
     * Set name
     *
     * @param string $name
     * @return Goods
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \ITR\CatalogBundle\Entity\GoodsCategory
     */
    private $goods_category;


    /**
     * Set goods_category
     *
     * @param \ITR\CatalogBundle\Entity\GoodsCategory $goodsCategory
     * @return Goods
     */
    public function setGoodsCategory(\ITR\CatalogBundle\Entity\GoodsCategory $goodsCategory = null)
    {
        $this->goods_category = $goodsCategory;
    
        return $this;
    }

    /**
     * Get goods_category
     *
     * @return \ITR\CatalogBundle\Entity\GoodsCategory 
     */
    public function getGoodsCategory()
    {
        return $this->goods_category;
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
     * @param \ITR\CatalogBundle\Entity\GoodsSellers $goods
     * @return Goods
     */
    public function addGood(\ITR\CatalogBundle\Entity\GoodsSellers $goods)
    {
        $this->goods[] = $goods;
    
        return $this;
    }

    /**
     * Remove goods
     *
     * @param \ITR\CatalogBundle\Entity\GoodsSellers $goods
     */
    public function removeGood(\ITR\CatalogBundle\Entity\GoodsSellers $goods)
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rating;


    /**
     * Add rating
     *
     * @param \ITR\CatalogBundle\Entity\Rating $rating
     * @return Goods
     */
    public function addRating(\ITR\CatalogBundle\Entity\Rating $rating)
    {
        $this->rating[] = $rating;
    
        return $this;
    }

    /**
     * Remove rating
     *
     * @param \ITR\CatalogBundle\Entity\Rating $rating
     */
    public function removeRating(\ITR\CatalogBundle\Entity\Rating $rating)
    {
        $this->rating->removeElement($rating);
    }

    /**
     * Get rating
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRating()
    {
        return $this->rating;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $images;


    /**
     * Add images
     *
     * @param \ITR\CatalogBundle\Entity\Image $images
     * @return Goods
     */
    public function addImage(\ITR\CatalogBundle\Entity\Image $images)
    {
        $this->images[] = $images;
    
        return $this;
    }

    /**
     * Remove images
     *
     * @param \ITR\CatalogBundle\Entity\Image $images
     */
    public function removeImage(\ITR\CatalogBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }
}
