<?php
// src/Entity/Matelas.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\MatelasRepository")
 */
class Matelas{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  private $number;
  private $type;
  private $status;
  private $condition;
  private $nb_seances;
  private $commissioningDate;

  public function __construct($number, $type, $status, $condition, $nb_seances, $commissioningDate){
    $this->number = $number;
    $this->type = $type;
    $this->status = $status;
    $this->condition = $condition;
    $this->nb_seances = $nb_seances;
    $this->commissioningDate = $commissioningDate;
  }

  public function addMatelas(){

  }

  public function deleteMatelas(){

  }

}
?>
