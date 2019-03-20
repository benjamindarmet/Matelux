<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;

class HomePageController extends Controller
{
    /**
     * @Route("/home/page", name="home_page")
     */
    public function index()
    {	
	/*$conn = $this->getDoctrine()->getEntityManager()->getConnection();
	$sql = 'SELECT * FROM patient p';
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$customers = $stmt->fetchAll();*/
	$repository = $this->getDoctrine()->getRepository(Patient::class);
	$customers = $repository->findAll();

        return $this->render(
		'home_page/index.html.twig',
		array('customers' => $customers)
        );
    }
}
