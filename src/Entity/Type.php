<?php
/**
* @Entity
* @Table(name="type")
*/

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

  /**
  * @ORM\Column(type="string", length=255)
  *
  * @var string
  */
  protected $type;

  /**
  * Constructeur pour la création d'un nouveau type de matelas
  */
  public function __construct(){
  }


  //Getter & Setter

  public function setType($typeName){
    $this->type = $typeName;
  }


  public function getId(){
    return $this->id;
  }

  public function getType(){
    return $this->type;
  }

}
?>
