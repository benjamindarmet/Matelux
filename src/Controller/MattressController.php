<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Mattress;

class MattressController extends Controller
{
    /**
     * @Route("/mattress", name="mattress")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $mattress = new Mattress(0, 'test', 'test', 'test', 0, 2019-03-14);

        $entityManager->persist($mattress);

        $entityManager->flush();

        return $this->render('mattress/index.html.twig', [
            'controller_name' => 'MattressController',
        ]);
    }
}
