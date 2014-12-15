<?php

namespace ITR\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seller
 */
class Seller
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
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $skype;

    /**
     * @var string
     */
    private $schedule;

    /**
     * @var string
     */
    private $description;


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
     * @return Seller
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
     * Set address
     *
     * @param string $address
     * @return Seller
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Seller
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return Seller
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    
        return $this;
    }

    /**
     * Get skype
     *
     * @return string 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set schedule
     *
     * @param string $schedule
     * @return Seller
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    
        return $this;
    }

    /**
     * Get schedule
     *
     * @return string 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Seller
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $goods_seller;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->goods_seller = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add goods_seller
     *
     * @param \ITR\CatalogBundle\Entity\GoodsSellers $goodsSeller
     * @return Seller
     */
    public function addGoodsSeller(\ITR\CatalogBundle\Entity\GoodsSellers $goodsSeller)
    {
        $this->goods_seller[] = $goodsSeller;
    
        return $this;
    }

    /**
     * Remove goods_seller
     *
     * @param \ITR\CatalogBundle\Entity\GoodsSellers $goodsSeller
     */
    public function removeGoodsSeller(\ITR\CatalogBundle\Entity\GoodsSellers $goodsSeller)
    {
        $this->goods_seller->removeElement($goodsSeller);
    }

    /**
     * Get goods_seller
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGoodsSeller()
    {
        return $this->goods_seller;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $phone;


    /**
     * Add phone
     *
     * @param \ITR\CatalogBundle\Entity\Phone $phone
     * @return Seller
     */
    public function addPhone(\ITR\CatalogBundle\Entity\Phone $phone)
    {
        $this->phone[] = $phone;
    
        return $this;
    }

    /**
     * Remove phone
     *
     * @param \ITR\CatalogBundle\Entity\Phone $phone
     */
    public function removePhone(\ITR\CatalogBundle\Entity\Phone $phone)
    {
        $this->phone->removeElement($phone);
    }

    /**
     * Get phone
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
