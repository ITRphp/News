<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * News
 */
class News
{
   
    private $category;
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var \DateTime
     */
    private $publication_date;

    /**
     * @var string
     */
    private $description;

    /**
     * Set title
     *
     * @param string $title
     * @return News
     */

    public function __construct(){
        $this->publication_date= new \DateTime();
        $this->users = new ArrayCollection();
    }

    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set authorl
     *
     * @param string $author
     * @return News
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get authorl
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set publication_date
     *
     * @param \DateTime $publicationDate
     * @return News
     */
    public function setPublicationDate(\DateTime $publicationDate)
    {
        $this->publication_date = $publicationDate;
    
        return $this;
    }

    /**
     * Get publication_date
     *
     * @return \DateTime 
     */
    public function getPublicationDate()
    {
        return $this->publication_date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return News
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
     * Set category
     *
     * @param \ITR\NewsBundle\Entity\Category $category
     * @return News
     */
    public function setCategory(\ITR\NewsBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \ITR\NewsBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \ITR\NewsBundle\Entity\PasswordRecovery
     */
    private $passwordrecovery;


    /**
     * Set passwordrecovery
     *
     * @param \ITR\NewsBundle\Entity\PasswordRecovery $passwordrecovery
     * @return News
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
     * @var string
     */
    private $content;


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
     * Set content
     *
     * @param string $content
     * @return News
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
 
 
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    
    private $users;


    /**
     * Add users
     *
     * @param \ITR\NewsBundle\Entity\User $users
     * @return News
     */
    public function addUser(\ITR\NewsBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \ITR\NewsBundle\Entity\User $users
     */
    public function removeUser(\ITR\NewsBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
