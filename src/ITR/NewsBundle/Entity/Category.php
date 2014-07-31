<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 */
class Category
{
      /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $category_name;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $news;
   /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dispatch;

   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dispatch = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add dispatch
     *
     * @param \ITR\NewsBundle\Entity\Dispatch $dispatch
     * @return Category
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
    
    public function __toString(){
        return $this->category_name;
    }
}
