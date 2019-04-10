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

      $ip = $this->getDoctrine()
        ->getRepository(User::class)
        ->findOneBy(['ip' => $this->getRealIpAddr()]);
    if ($ip) {
        return $this->redirectToRoute('home_page');
    }

      $entityManager = $this->getDoctrine()->getManager();

      if(isset($_POST['envoi'])){
        $username = $_POST['_username'];

        if($username != ''){

          $newUser = new User($username, $this->getRealIpAddr(),new \DateTime('now'));

          $entityManager->persist($newUser);

          $entityManager->flush();

          return $this->redirectToRoute('home_page');
        }
      }

      return $this->render('welcome/index.html.twig', [
        'controller_name' => 'WelcomeController',
      ]);
    }

    function getRealIpAddr() {
      if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
      {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
      }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
      {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      else
      {
        $ip=$_SERVER['REMOTE_ADDR'];
      }
      return $ip;
  }

}
