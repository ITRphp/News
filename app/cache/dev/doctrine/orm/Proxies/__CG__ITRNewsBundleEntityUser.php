<?php

namespace Proxies\__CG__\ITR\NewsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \ITR\NewsBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'user_name', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'user_password', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'user_role', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'dispatches', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'user_email');
        }

        return array('__isInitialized__', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'user_name', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'user_password', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'user_role', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'dispatches', '' . "\0" . 'ITR\\NewsBundle\\Entity\\User' . "\0" . 'user_email');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setUserName($userName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserName', array($userName));

        return parent::setUserName($userName);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserName', array());

        return parent::getUserName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserPassword($userPassword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserPassword', array($userPassword));

        return parent::setUserPassword($userPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserPassword', array());

        return parent::getUserPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserEmail($userEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserEmail', array($userEmail));

        return parent::setUserEmail($userEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserEmail', array());

        return parent::getUserEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserRole($userRole)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserRole', array($userRole));

        return parent::setUserRole($userRole);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRole', array());

        return parent::getUserRole();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($serialized));

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addDispatch(\ITR\NewsBundle\Entity\Dispatch $dispatches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDispatch', array($dispatches));

        return parent::addDispatch($dispatches);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDispatch(\ITR\NewsBundle\Entity\Dispatch $dispatches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDispatch', array($dispatches));

        return parent::removeDispatch($dispatches);
    }

    /**
     * {@inheritDoc}
     */
    public function getDispatches()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDispatches', array());

        return parent::getDispatches();
    }

}
