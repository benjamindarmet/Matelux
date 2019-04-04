<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;
use App\Entity\User;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HomePageController extends Controller
{
    /**
      * @Route("/accueil", name="home_page")
      */
    public function indexAction()
    {

      //Vérifie si l'ip souhaitant accéder à cette page est dans la BDD, si non, il est redirigé vers /welcome
      $ip = $this->getDoctrine()
        ->getRepository(User::class)
        ->findOneBy(['ip' => $this->getRealIpAddr()]);
      if (!$ip) {
        return $this->redirectToRoute('welcome');
      }

      //Gère la déconnexion
      $entityManager = $this->getDoctrine()->getManager();
      if(isset($_POST['disconnect'])){
        print "test";
        $ip = $this->getDoctrine()
          ->getRepository(User::class)
          ->findOneBy(['ip' => $this->getRealIpAddr()]);
        if ($ip) {
          $entityManager->remove($ip);
          $entityManager->flush();
          return $this->redirectToRoute('welcome');
        }
      }

       //Récupérer la table créée à partir de la classe patient
  	   $repository = $this->getDoctrine()->getRepository(Patient::class);
       $customers = $repository->findAll();

       //Créer le formulaire addPAtient à partir de classe patient
       $patient = new Patient();
       $form = $this->createFormBuilder($patient)
          ->add('nip', IntegerType::class)
          ->add('date_first_scanner', DateType::class, ['widget' => 'single_text'])
          ->add('mep', DateType::class, ['widget' => 'single_text'])
          ->add('number_seance', IntegerType::class)
          ->add('ftr', DateType::class, ['widget' => 'single_text'])
          ->add('comment', TextType::class)
          ->add('mattress', IntegerType::class)
          ->add('type', IntegerType::class)

          ->add('Ajouter patient', SubmitType::class, ['label' => 'Add Patient'])
          ->getForm();

      //return
          return $this->render('home_page/index.html.twig',
          array('customers' => $customers,
          'formulaireAddPatient' => $form->createView())
        );
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
