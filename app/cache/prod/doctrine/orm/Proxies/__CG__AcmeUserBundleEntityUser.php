<?php

namespace Proxies\__CG__\Acme\UserBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \Acme\UserBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setUsername($in)
    {
        $this->__load();
        return parent::setUsername($in);
    }

    public function setPassword($in)
    {
        $this->__load();
        return parent::setPassword($in);
    }

    public function setRole($in)
    {
        $this->__load();
        return parent::setRole($in);
    }

    public function getRole()
    {
        $this->__load();
        return parent::getRole();
    }

    public function getID()
    {
        $this->__load();
        return parent::getID();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'username', 'password', 'role');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}