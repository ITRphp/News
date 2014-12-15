<?php

namespace ITR\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 */
class Rating
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $mark;


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
     * Set mark
     *
     * @param integer $mark
     * @return Rating
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    
        return $this;
    }

    /**
     * Get mark
     *
     * @return integer 
     */
    public function getMark()
    {
        return $this->mark;
    }
    /**
     * @var \ITR\NewsBundle\Entity\User
     */
    private $user_id;


    /**
     * Set user_id
     *
     * @param \ITR\NewsBundle\Entity\User $userId
     * @return Rating
     */
    public function setUserId(\ITR\NewsBundle\Entity\User $userId = null)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return \ITR\NewsBundle\Entity\User 
     */
    public function getUserId()
    {
        return $this->user_id;
    }
    /**
     * @var \ITR\CatalogBundle\Entity\Goods
     */
    private $goods_id;


    /**
     * Set goods_id
     *
     * @param \ITR\CatalogBundle\Entity\Goods $goodsId
     * @return Rating
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
