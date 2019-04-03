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

  //Getter & Setter

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function getType(){
    return $this->type;
  }

  public function setType($typeName){
    $this->type = $typeName;
  }

}
?>
