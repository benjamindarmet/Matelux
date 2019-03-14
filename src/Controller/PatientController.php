<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Patient;


class PatientController extends Controller
{
    /**
     * @Route("/patient", name="patient")
     */
    public function index()
    {
      $entityManager = $this->getDoctrine()->getManager();

      $patient = new Patient(13, '1999-10-10', '1997-09-01', 50, '2050-10-20', 'teste comment', 20, 10);

      $entityManager->persist($patient);

      $entityManager->flush();

      return $this->render('patient/index.html.twig', [
        'controller_name' => 'PatientController',
        ]);
    }
}

?>
