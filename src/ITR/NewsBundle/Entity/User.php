<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $user_name;

    /**
     * @var string
     */
    private $user_password;
    
    /**
     * @var string
     */
    private $user_role;
    
    private $dispatchs;

    public function __construct() {
        $this->dispatchs = new ArrayCollection();
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
     * Set user_name
     *
     * @param string $userName
     * @return User
     */
    public function setUserName($userName)
    {
        $this->user_name = $userName;
    
        return $this;
    }

    /**
     * Get user_name
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set user_password
     *
     * @param string $userPassword
     * @return User
     */
    public function setUserPassword($userPassword)
    {
        $this->user_password = $userPassword;
    
        return $this;
    }

    /**
     * Get user_password
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }
    /**
     * @var string
     */
    private $user_email;


    /**
     * Set user_email
     *
     * @param string $userEmail
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->user_email = $userEmail;
    
        return $this;
    }

    /**
     * Get user_email
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * Set user_role
     *
     * @param string $userRole
     * @return User
     */
    public function setUserRole($userRole)
    {
        $this->user_role = $userRole;
    
        return $this;
    }

    /**
     * Get user_role
     *
     * @return string 
     */
    public function getUserRole()
    {
        return $this->user_role;
    }

    /**
     * Add dispatch
     *
     * @param \ITR\NewsBundle\Entity\Dispatch $dispatch
     * @return User
     */
    public function addDispatch(\ITR\NewsBundle\Entity\Dispatch $dispatch)
    {
        $this->dispatch[] = $dispatch;
    
        return $this;
    }

    /**
     * Remove dispatch
     *
     * @param \ITR\NewsBundle\Entity\Dispatch $dispatch
     */
    public function removeDispatch(\ITR\NewsBundle\Entity\Dispatch $dispatch)
    {
        $this->dispatch->removeElement($dispatch);
    }

    /**
     * Get dispatch
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDispatch()
    {
        return $this->dispatch;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dispatch;


}
