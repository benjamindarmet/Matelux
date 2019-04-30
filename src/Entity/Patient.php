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
  protected $nip;

  /**
    * @ORM\Column(type="datetime")
    *
    * @var datetime
    */
  protected $date_first_scanner;

  /**
    * @ORM\Column(type="datetime")
    *
    * @var datetime
    */
  protected $mep;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  protected $number_seance;

  /**
    * @ORM\Column(type="datetime")
    *
    * @var datetime
    */
  protected $ftr;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  protected $comment;

  /**
    * @ORM\Column(type="integer", length=11)
    *
    * @var integer
    */
  protected $mattress;

  /**
    * @ORM\Column(type="string", length=255)
    *
    * @var string
    */
  protected $type;

  public function getNip()
  {
    return $this->nip;
  }

  public function setNip($nip)
  {
      $this->nip = $nip;
  }


  public function getDateFirstScanner()
  {
    return $this->date_first_scanner;
  }

  public function setDateFirstScanner($date_first_scanner)
  {
      $this->date_first_scanner = $date_first_scanner;
  }

  public function getMep()
  {
      return $this->mep;
  }

  public function setMep($mep)
  {
      $this->mep = $mep;
  }


  public function getNumberSeance()
  {
      return $this->number_seance;
  }

  public function setNumberSeance($number_seance)
  {
      $this->number_seance = $number_seance;
  }

  public function getFtr()
  {
    return $this->ftr;
  }

  public function setFtr($ftr)
  {
      $this->ftr = $ftr;
  }

  public function getComment()
  {
    return $this->comment;
  }

  public function setComment($comment)
  {
      $this->comment = $comment;
  }

  public function getMattress()
  {
      return $this->mattress;
  }

  public function setMattress($mattress)
  {
      $this->mattress = $mattress;
  }


  public function getType()
  {
      return $this->type;
  }

  public function setType($type)
  {
      $this->type = $type;
  }

  /*public function __construct($nip, $date_first_scanner, $mep, $number_seance, $ftr, $comment, $mattress, $type){
    $this->nip = $nip;
    $this->date_first_scanner = $date_first_scanner;
    $this->mep = $mep;
    $this->number_seance = $number_seance;
    $this->ftr = $ftr;
    $this->comment = $comment;
    $this->mattress = $mattress;
    $this->type = $type;
  }*/


}
?>
