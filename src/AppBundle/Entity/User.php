<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * user
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(unique=true, type="string", length=255)
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     * @ORM\Column(unique=true, type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role = "ROLE_STUDENT";

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }


    public function getPlainPassword()
    {
        return $this->plainPassword;
    }


    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return user
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return [
            $this->role
        ];
    }

    /**
     * Get role
     *
     */
    public function getRoles()
    {
        return [
            $this->role
        ];
    }







    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
        return null;
    }

    public function __construct()
    {
        $this->isActive = true;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    public function unserialize($serialized) {
        list (
            $this->id,
            $this->pseudo,
            $this->password,
            ) = unserialize($serialized);
    }
}

