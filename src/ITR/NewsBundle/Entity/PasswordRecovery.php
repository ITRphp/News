<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordRecovery
 */
class PasswordRecovery
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer

    /**
     * @var string
     */
    private $accessHash;

    /**
     * @var \DateTime
     */
    private $expires;
    
    private $user;

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
     * Set accessHash
     *
     * @param string $accessHash
     * @return PasswordRecovery
     */
    public function setAccessHash($accessHash)
    {
        $this->accessHash = $accessHash;

        return $this;
    }

    /**
     * Get accessHash
     *
     * @return string 
     */
    public function getAccessHash()
    {
        return $this->accessHash;
    }

    /**
     * Set expires
     *
     * @param \DateTime $expires
     * @return PasswordRecovery
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return \DateTime 
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set user
     *
     * @param \ITR\NewsBundle\Entity\User $user
     * @return PasswordRecovery
     */
    public function setUser(\ITR\NewsBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ITR\NewsBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    
    
}
