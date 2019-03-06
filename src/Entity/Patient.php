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

  private $NIP;
  private $scannerDate;
  private $MEPdate;
  private $nb_seances;
  private $FTRdate;
  private $note;
  private $associatedMatelas;
  private $treatmentType;

  public function __construct($NIP, $scannerDate, $MEPdate, $nb_seances, $FTRdate, $note, $associatedMatelas, $treatmentType){
    $this->NIP = $NIP;
    $this->scannerDate = $scannerDate;
    $this->MEPdate = $MEPdate;
    $this->nb_seances = $nb_seances;
    $this->FTRdate = $FTRdate;
    $this->note = $note;
    $this->associatedMatelas = $associatedMatelas;
    $this->treatmentType = $treatmentType;
  }

  public function addPatient(){

  }

  public function deletePatient(){

  }

}
?>
