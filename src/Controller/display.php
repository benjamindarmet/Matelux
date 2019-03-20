<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Patient;
//use App\Repository\PatientRepository;

class display extends AbstractController
{

     /**
      * @Route("/display")
      */
    public function number()
    {
	/*$repository = $this->getDoctrine()->getRepository(Patient::class);
	$customers = $repository->findAll();*/

	$conn = $this->getDoctrine()->getEntityManager()->getConnection();
	$sql = 'SELECT * FROM patient p';
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$customers = $stmt->fetchAll();
	return $this->render( 'customerTable.html.twig', array('customers' => $customers));
    }
}
?>
