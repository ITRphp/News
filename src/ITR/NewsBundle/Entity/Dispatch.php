<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Dispatch
 */
class Dispatch
{
   
    private $id;
   
    /**
     * @var integer
     */
    private $category_id;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var \ITR\NewsBundle\Entity\Category
     */
    private $categories;

    /**
     * @var \ITR\NewsBundle\Entity\User
     */
    private $users;

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
     * Set category_id
     *
     * @param integer $categoryId
     * @return Dispatch
     */
    public function setCategoryId($categoryId)
    {
        $this->category_id = $categoryId;
    
        return $this;
    }

    /**
     * Get category_id
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Dispatch
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set categories
     *
     * @param \ITR\NewsBundle\Entity\Category $categories
     * @return Dispatch
     */
    public function setCategories(\ITR\NewsBundle\Entity\Category $categories = null)
    {
        $this->categories = $categories;
    
        return $this;
    }

    /**
     * Get categories
     *
     * @return \ITR\NewsBundle\Entity\Category 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set users
     *
     * @param \ITR\NewsBundle\Entity\User $users
     * @return Dispatch
     */
    public function setUsers(\ITR\NewsBundle\Entity\User $users = null)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return \ITR\NewsBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
