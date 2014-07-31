<?php

namespace Proxies\__CG__\ITR\NewsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \ITR\NewsBundle\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'ITR\\NewsBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'ITR\\NewsBundle\\Entity\\Category' . "\0" . 'category_name', 'news', '' . "\0" . 'ITR\\NewsBundle\\Entity\\Category' . "\0" . 'dispatch');
        }

        return array('__isInitialized__', '' . "\0" . 'ITR\\NewsBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'ITR\\NewsBundle\\Entity\\Category' . "\0" . 'category_name', 'news', '' . "\0" . 'ITR\\NewsBundle\\Entity\\Category' . "\0" . 'dispatch');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoryName($categoryName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoryName', array($categoryName));

        return parent::setCategoryName($categoryName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryName', array());

        return parent::getCategoryName();
    }

    /**
     * {@inheritDoc}
     */
    public function addNews(\ITR\NewsBundle\Entity\News $news)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNews', array($news));

        return parent::addNews($news);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNews(\ITR\NewsBundle\Entity\News $news)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNews', array($news));

        return parent::removeNews($news);
    }

    /**
     * {@inheritDoc}
     */
    public function getNews()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNews', array());

        return parent::getNews();
    }

    /**
     * {@inheritDoc}
     */
    public function addDispatch(\ITR\NewsBundle\Entity\Dispatch $dispatch)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDispatch', array($dispatch));

        return parent::addDispatch($dispatch);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDispatch(\ITR\NewsBundle\Entity\Dispatch $dispatch)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDispatch', array($dispatch));

        return parent::removeDispatch($dispatch);
    }

    /**
     * {@inheritDoc}
     */
    public function getDispatch()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDispatch', array());

        return parent::getDispatch();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
