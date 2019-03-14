<?php
// src/Entity/Matelas.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\MatelasRepository")
 */
class Mattress{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
  private $type;
  private $status;
  private $state;
  private $number_of_utilisation;
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
