<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 */
class Category
{
        
    protected $news;

    public function __construct()
    {
        $this->news = new ArrayCollection();
    }
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $category_name;


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
     * Set category_name
     *
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->category_name = $categoryName;
    
        return $this;
    }

    /**
     * Get category_name
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->category_name;
    }

    /**
     * Add news
     *
     * @param \ITR\NewsBundle\Entity\News $news
     * @return Category
     */
    public function addNews(\ITR\NewsBundle\Entity\News $news)
    {
        $this->news[] = $news;
    
        return $this;
    }

    /**
     * Remove news
     *
     * @param \ITR\NewsBundle\Entity\News $news
     */
    public function removeNews(\ITR\NewsBundle\Entity\News $news)
    {
        $this->news->removeElement($news);
    }

    /**
     * Get news
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNews()
    {
        return $this->news;
    }
}
