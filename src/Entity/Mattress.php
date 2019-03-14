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
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
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

  public function __construct($id, $type, $status, $state, $number_of_utilisation, $commissioning){
    $this->id = $id;
    $this->type = $type;
    $this->status = $status; // (libre, en cours d’utilisation, nettoyage, moulage)
    $this->state = $state; //état (bon, usé , hors service)
    $this->number_of_utilisation = $number_of_utilisation;
    $this->commissioning = $commissioning; //date
  }

}
?>
