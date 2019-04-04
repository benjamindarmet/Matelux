<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;
use App\Entity\Mattress;

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
    public function indexAction(Request $request)
    {
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

          ->add('Ajouter patient', SubmitType::class, ['label' => 'Valider'])
          ->getForm();

      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid())
      {
        $data = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
      }

      //Créer le formulaire addMatelas à partir de la classe Mattress
      $mattress = new Mattress();
      $formAddMatelas = $this->createFormBuilder($mattress)
        ->add('type', TextType::class)
        ->add('status', TextType::class)
        ->add('state', TextType::class)
        ->add('commissioning', TextType::class)

        ->add('Ajouter matelas', SubmitType::class,  ['label' => 'Add Matelas'])
        ->getForm();

      $formAddMatelas->handleRequest($request);
      if($formAddMatelas->isSubmitted() && $formAddMatelas->isValid())
      {
        $data = $formAddMatelas->getData();
        $em = $this->getDoctrine()->getManager();
        $data->setNumberOfUtilisation(0);
        $em->persist($data);
        $em->flush();
      }
      //return
          return $this->render('home_page/index.html.twig',
          array('customers' => $customers,
          'formulaireAddPatient' => $form->createView(),
          'formulaireAddMatelas' => $formAddMatelas->createView())
        );
    }
}
