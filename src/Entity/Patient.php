<?php
// src/Entity/Patient.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PatientRepository")
 */
class Patient{
  /**
    * @ORM\Id
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  public $nip;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  public $date_first_scanner;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  public $mep;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  public $number_seance;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  public $ftr;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  public $comment;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  public $mattress;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  public $type;

  public function __construct($nip, $date_first_scanner, $mep, $number_seance, $ftr, $comment, $mattress, $type){
    $this->nip = $nip;
    $this->date_first_scanner = $date_first_scanner;
    $this->mep = $mep;
    $this->number_seance = $number_seance;
    $this->ftr = $ftr;
    $this->comment = $comment;
    $this->mattress = $mattress;
    $this->type = $type;
  }

  public function addPatient(){

  }

  public function deletePatient(){

  }

}
?>
