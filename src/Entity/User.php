<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     */
    protected $username;

    public function __construct(){
        parent::__construct();
        // your own logic
    }

    /**
     * {@inheritdoc}
     */
    public function getId(){
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername(){
        return $this->username;
    }

    /**
     * @return string
     */
    public function __toString(){
        return (string) $this->getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function setUsername($username){
        $this->username = $username;

        return $this;
    }
}
