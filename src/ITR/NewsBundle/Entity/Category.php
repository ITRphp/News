<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @ORM\OneToMany(targetEntity="News", mappedBy="category")
     */
    
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
}
