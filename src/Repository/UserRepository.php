<?php

// src/Repository/PatientRepository.php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\User;

class UserRepository extends EntityRepository{

    public function findAllOrderedByName(){
        return $this->getEntityManager()
            ->createQuery('SELECT u FROM User u ORDER BY u.IP ASC')
            ->getResult();
    }

    public function listAction(){
      $users = $this->getDoctrine()
          ->getRepository(User::class)
          ->findAllOrderedByName();
    }
}

?>
