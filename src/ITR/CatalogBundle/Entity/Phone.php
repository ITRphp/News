<?php

namespace ITR\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone
 */
class Phone
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $number;


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
     * Set number
     *
     * @param string $number
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * @var \ITR\CatalogBundle\Entity\Seller
     */
    private $seller_id;


    /**
     * Set seller_id
     *
     * @param \ITR\CatalogBundle\Entity\Seller $sellerId
     * @return Phone
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
