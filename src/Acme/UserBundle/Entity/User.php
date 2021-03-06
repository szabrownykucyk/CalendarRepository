<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User implements UserInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="username",type="string", length=128)
     */
    protected $username;



    /**
     * @ORM\Column(name="password",type="string", length=128)
     */
    protected $password;

    /**
     * @ORM\Column(name="role",type="string", length=16)
     */
    protected $role;


	public function	setUsername($in)
	{
		$this->username=$in;
	} 
	public function setPassword($in)
	{
		$this->password=$in;
	}
	public function setRole($in)
	{
		$this->role=$in;
	}

	public function getRole()
	{
		return $this->role;
	}
	
	public function getID()
	{
		return $this->id;
	}

	public function getRoles()
	{
		if ($this->role == 'admin')
			return array('ROLE_ADMIN');		
		else		
			return array('ROLE_USER');
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getSalt(){}

	public function getUsername()
	{
		return $this->username;
	}

	public function eraseCredentials(){}

     public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }



    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }




}
