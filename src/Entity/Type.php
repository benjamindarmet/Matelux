<?php
// src/Entity/Matelas.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\TypeRepository")
 */
class Type{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  private $type;

  /**
  * Constructeur pour la création d'un nouveau type de matelas
  * @ORM\type correspond au nom du nouveau type qui doit être ajouté.
  */
  public function __construct($type){
    $this->type = $type;
  }

  public function getId(){
    return $ths->id;
  }

  public function getType(){
    return $this->type;
  }
}
?>
