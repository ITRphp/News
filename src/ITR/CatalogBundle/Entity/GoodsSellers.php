<?php

namespace ITR\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoodsSellers
 */
class GoodsSellers
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $quantity;


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
     * Set price
     *
     * @param integer $price
     * @return GoodsSellers
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return GoodsSellers
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * @var \ITR\CatalogBundle\Entity\Goods
     */
    private $goods_id;

    /**
     * @var \ITR\CatalogBundle\Entity\Seller
     */
    private $seller_id;


    /**
     * Set goods_id
     *
     * @param \ITR\CatalogBundle\Entity\Goods $goodsId
     * @return GoodsSellers
     */
    public function setGoodsId(\ITR\CatalogBundle\Entity\Goods $goodsId = null)
    {
        $this->goods_id = $goodsId;
    
        return $this;
    }

    /**
     * Get goods_id
     *
     * @return \ITR\CatalogBundle\Entity\Goods 
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Set seller_id
     *
     * @param \ITR\CatalogBundle\Entity\Seller $sellerId
     * @return GoodsSellers
     */
    public function setSellerId(\ITR\CatalogBundle\Entity\Seller $sellerId = null)
    {
        $this->seller_id = $sellerId;
    
        return $this;
    }

    /**
     * Get seller_id
     *
     * @return \ITR\CatalogBundle\Entity\Seller 
     */
    public function getSellerId()
    {
        return $this->seller_id;
    }
}
