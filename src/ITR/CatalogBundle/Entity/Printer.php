<?php

namespace ITR\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Printer
 */
class Printer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var boolean
     */
    private $scanner;

    /**
     * @var boolean
     */
    private $fax;

    /**
     * @var string
     */
    private $printType;


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
     * Set type
     *
     * @param string $type
     * @return Printer
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set scanner
     *
     * @param boolean $scanner
     * @return Printer
     */
    public function setScanner($scanner)
    {
        $this->scanner = $scanner;
    
        return $this;
    }

    /**
     * Get scanner
     *
     * @return boolean 
     */
    public function getScanner()
    {
        return $this->scanner;
    }

    /**
     * Set fax
     *
     * @param boolean $fax
     * @return Printer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return boolean 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set printType
     *
     * @param string $printType
     * @return Printer
     */
    public function setPrintType($printType)
    {
        $this->printType = $printType;
    
        return $this;
    }

    /**
     * Get printType
     *
     * @return string 
     */
    public function getPrintType()
    {
        return $this->printType;
    }
}
