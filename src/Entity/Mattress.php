<?php
// src/Entity/Mattress.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\MattressRepository")
 */
class Mattress{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  private $type;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  private $status;

/**
  * @ORM\Column(type="string", length=255)
  *
  * @var string
  */
  private $state;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  private $number_of_utilisation;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  private $commissioning;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getNumberOfUtilisation()
  {
    return $this->number_of_utilisation;
  }

  public function setNumberOfUtilisation($number_of_utilisation)
  {
    $this->number_of_utilisation = $number_of_utilisation;
  }

  public function getCommissioning()
  {
    return $this->commissioning;
  }

  public function setCommissioning($commissioning)
  {
    $this->commissioning = $commissioning;
  }

  /*public function __construct($id, $type, $status, $state, $number_of_utilisation, $commissioning){
    $this->id = $id;
    $this->type = $type;
    $this->status = $status; // (libre, en cours d’utilisation, nettoyage, moulage)
    $this->state = $state; //état (bon, usé , hors service)
    $this->number_of_utilisation = $number_of_utilisation;
    $this->commissioning = $commissioning; //date
  }*/

}
?>
