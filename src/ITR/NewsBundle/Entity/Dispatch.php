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
     * @var \ITR\NewsBundle\Entity\User
     */
    private $users;

    /**
     * @var \ITR\NewsBundle\Entity\Category
     */
    private $categories;


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
