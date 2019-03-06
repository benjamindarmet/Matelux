<?php

// src/Repository/MatelasRepository.php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\Matelas;

class MatelasRepository extends EntityRepository{

    public function findAllOrderedByName(){
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM Matelas p ORDER BY p.number ASC')
            ->getResult();
    }

    public function listAction(){
      $products = $this->getDoctrine()
          ->getRepository(Matelas::class)
          ->findAllOrderedByName();
    }
}

?>
