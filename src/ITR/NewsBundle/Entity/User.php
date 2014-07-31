<?php

namespace ITR\NewsBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 */
class User implements UserInterface,  \Serializable
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
    
    
    private $dispatches;
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

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        
        return $this->user_password;
    }

    public function getRoles() {
        
        return array('ROLE_USER');
    }

    public function getSalt() {
        
        return null;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->user_name,
            $this->user_password,
            $this->user_email,
            $this->user_role
        ));
    }

    public function unserialize($serialized) {
        
    }
    public function __toString(){
        return $this->user_name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dispatches = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dispatches
     *
     * @param \ITR\NewsBundle\Entity\Dispatch $dispatches
     * @return User
     */
    public function addDispatch(\ITR\NewsBundle\Entity\Dispatch $dispatches)
    {
        $this->dispatches[] = $dispatches;
    
        return $this;
    }

    /**
     * Remove dispatches
     *
     * @param \ITR\NewsBundle\Entity\Dispatch $dispatches
     */
    public function removeDispatch(\ITR\NewsBundle\Entity\Dispatch $dispatches)
    {
        $this->dispatches->removeElement($dispatches);
    }

    /**
     * Get dispatches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDispatches()
    {
        return $this->dispatches;
    }
}
