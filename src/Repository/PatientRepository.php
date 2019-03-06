<?php

// src/Repository/PatientRepository.php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\Patient;

class PatientRepository extends EntityRepository{

    public function findAllOrderedByName(){
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM Patient p ORDER BY p.NIP ASC')
            ->getResult();
    }

    public function listAction(){
      $products = $this->getDoctrine()
          ->getRepository(Patient::class)
          ->findAllOrderedByName();
    }
}

?>
