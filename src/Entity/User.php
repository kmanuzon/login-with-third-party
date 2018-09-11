<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_users")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $googleId;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $displayName;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $avatarUrl;


    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getGoogleId()
    {
        return $this->googleId;
    }

    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($value)
    {
        $this->displayName = $value;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl($value)
    {
        $this->avatarUrl = $value;
    }

    public function getPassword()
    {
    }
    public function getSalt()
    {
    }
    public function eraseCredentials()
    {
    }

    // more getters/setters
}
