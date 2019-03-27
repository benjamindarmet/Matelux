<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;

class WelcomeController extends Controller
{
    /**
     * @Route("/welcome", name="welcome")
     */
    public function index()
    {
      $entityManager = $this->getDoctrine()->getManager();

      if(isset($_POST['envoi'])){
        $username = $_POST['_username'];

        $newUser = new User($username);

        $entityManager->persist($newUser);
      }

      $entityManager->flush();

      return $this->render('welcome/index.html.twig', [
        'controller_name' => 'WelcomeController',
      ]);
    }
}
