<?php

/** You need to install composer require sensio/framework-extra-bundle */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Type;

class TypeController extends Controller
{
    /**
     * @Route("/type", name="type")
     */
    public function index()
    {
      $entityManager = $this->getDoctrine()->getManager();
      $newType = new Type();
      $newType->setType("testType");

      // tell Doctrine you want to (eventually) save the Product (no queries yet)
      $entityManager->persist($newType);

      // actually executes the queries (i.e. the INSERT query)
      $entityManager->flush();

      return $this->render('type/index.html.twig', [
        'controller_name' => 'TypeController',
      ]);
    }

    public function show($id)
    {
      $mattressType = $this->getDoctrine()
       ->getRepository(Type::class)
       ->find($type);

       if (!$mattressType) {
         throw $this->createNotFoundException(
           'No product found for id '.$type
         );
       }

   return new Response("Test");

   // or render a template
   // in the template, print things with {{ product.name }}
   // return $this->render('product/show.html.twig', ['product' => $product]);
    }


}
