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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rating;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $images;

    /**
     * @var \ITR\CatalogBundle\Entity\Printer
     */
    private $goods_id;

    /**
     * @var \ITR\CatalogBundle\Entity\GoodsCategory
     */
    private $goods_category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rating = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set goods_id
     *
     * @param \ITR\CatalogBundle\Entity\Printer $goodsId
     * @return Goods
     */
    public function setGoodsId(\ITR\CatalogBundle\Entity\Printer $goodsId = null)
    {
        $this->goods_id = $goodsId;
    
        return $this;
    }

    /**
     * Get goods_id
     *
     * @return \ITR\CatalogBundle\Entity\Printer 
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

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
}
