<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $descroption;


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
     * Set title
     *
     * @param string $title
     * @return News
     */
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

    /**
     * Set descroption
     *
     * @param string $descroption
     * @return News
     */
    public function setDescroption($descroption)
    {
        $this->descroption = $descroption;
    
        return $this;
    }

    /**
     * Get descroption
     *
     * @return string 
     */
    public function getDescroption()
    {
        return $this->descroption;
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
}
