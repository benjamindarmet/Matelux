<?php
// src/AppBundle/Entity/User.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {

    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @ORM\Column(name = "username", type="string", length=255)
     * @var string
     */
    protected $username;

    /**
    * @ORM\Column(name="ip", type="string", length=255)
    * @var string
    */
    protected $ip;

    /**
    * @ORM\Column(name="date", type="string", length=255)
    * @var string
    */
    protected $date;

    public function __construct($username, $ip){
        $this->username = $username;
        $this->ip = $ip;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername(){
        return $this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function getIp(){
        return $this->ip;
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

public function getDate(){
  return $this->date;
}
    /**
     * {@inheritdoc}
     */
    public function setIp($ip){
        $this->ip = $ip;
        return $this;
    }

    public function getId(){
      return $this->id;
    }
}
