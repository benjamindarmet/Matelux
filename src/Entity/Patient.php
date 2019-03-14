<?php
// src/Entity/Patient.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\PatientRepository")
 */
class Patient{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;


  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  private $nip;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  private $date_first_scanner;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  private $mep;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  private $number_seance;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  private $ftr;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  private $comment;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  private $mattress;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  private $type;

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
