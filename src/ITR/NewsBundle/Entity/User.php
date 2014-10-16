<?php

namespace ITR\NewsBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

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

    private $roles;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->roles = new ArrayCollection();
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
       $encoder = new MessageDigestPasswordEncoder('sha1');
       $password = $encoder->encodePassword($userPassword, $this->getSalt());
       $this->user_password = $password;
    
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
        if($this->getUserActive() == 0){
            return 'NULL';
        }
        return $this->user_password;
    }

//    public function getRoles() {
//
//        return array($this->user_role);
//    }

    public function getSalt() {
        
        return null;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->user_name,           
            $this->user_email,
             $this->user_password,
            $this->user_role
        ));
    }

    public function unserialize($serialized) {
        list (
            $this->id
           , $this->user_name
           , $this->user_email
           , $this->user_password
                , $this->user_role
            ) = unserialize($serialized);
        
    }
    public function __toString(){
        return $this->user_name;
    }
    private $passwordrecovery;


    /**
     * Set passwordrecovery
     *
     * @param \ITR\NewsBundle\Entity\PasswordRecovery $passwordrecovery
     * @return User
     */
    public function setPasswordrecovery(\ITR\NewsBundle\Entity\PasswordRecovery $passwordrecovery = null)
    {
        $this->passwordrecovery = $passwordrecovery;

        return $this;
    }

    /**
     * Get passwordrecovery
     *
     * @return \ITR\NewsBundle\Entity\PasswordRecovery 
     */
    public function getPasswordrecovery()
    {
        return $this->passwordrecovery;
    }

    /**
     * @var boolean
     */
    private $user_active;


    /**
     * Set user_active
     *
     * @param boolean $userActive
     * @return User
     */
    public function setUserActive($userActive)
    {
        $this->user_active = $userActive;

        return $this;
    }

    /**
     * Get user_active
     *
     * @return boolean 
     */
    public function getUserActive()
    {
        return $this->user_active;
    }
    /**
     * @var string
     */
    private $user_hash;


    /**
     * Set user_hash
     *
     * @param string $userHash
     * @return User
     */
    public function setUserHash($userHash)
    {
        $this->user_hash = $userHash;

        return $this;
    }

    /**
     * Get user_hash
     *
     * @return string 
     */
    public function getUserHash()
    {
        return $this->user_hash;
    }
 
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;


    /**
     * Add category
     *
     * @param \ITR\NewsBundle\Entity\Category $category
     * @return User
     */
    public function addCategory(\ITR\NewsBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \ITR\NewsBundle\Entity\Category $category
     */
    public function removeCategory(\ITR\NewsBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }

    protected $comments;

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }


    /**
     * Add comments
     *
     * @param \ITR\NewsBundle\Entity\Comment $comments
     * @return User
     */
    public function addComment(\ITR\NewsBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \ITR\NewsBundle\Entity\Comment $comments
     */
    public function removeComment(\ITR\NewsBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * @param string $role
     * @return UserSuperclass|void
     */
    public function addRole($role)
    {
        $this->roles->add($role);
        return $this;
    }

    /**
     * @param string $role
     * @return UserSuperclass|void
     */
    public function removeRole($role)
    {
        $this->roles->removeElement($role);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }
}
