<?php

namespace ITR\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;


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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @var \ITR\CatalogBundle\Entity\Goods
     */
    private $goods_id;


    /**
     * Set goods_id
     *
     * @param \ITR\CatalogBundle\Entity\Goods $goodsId
     * @return Image
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
}
