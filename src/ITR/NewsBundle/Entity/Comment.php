<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 */
class Comment
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \ITR\NewsBundle\Entity\User
     */
    private $users;

    /**
     * @var \ITR\NewsBundle\Entity\News
     */
    private $news;


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
     * @return Comment
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
     * Set users
     *
     * @param \ITR\NewsBundle\Entity\User $users
     * @return Comment
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

    /**
     * Set news
     *
     * @param \ITR\NewsBundle\Entity\News $news
     * @return Comment
     */
    public function setNews(\ITR\NewsBundle\Entity\News $news = null)
    {
        $this->news = $news;
    
        return $this;
    }

    /**
     * Get news
     *
     * @return \ITR\NewsBundle\Entity\News 
     */
    public function getNews()
    {
        return $this->news;
    }
    /**
     * @var \DateTime
     */
    private $publication_date;


    /**
     * Set publication_date
     *
     * @param \DateTime $publicationDate
     * @return Comment
     */
    public function setPublicationDate($publicationDate)
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
}
