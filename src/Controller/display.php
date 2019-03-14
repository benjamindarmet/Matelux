<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Mattress;

class display extends AbstractController
{

     /**
      * @Route("/display")
      */
    public function number()
    {
	$repository = $this->getDoctrine()->getRepository(Mattress::class);
	$customers = $repository->findAll();
	
	return $this->render( 'customerTable.html.twig', array('customers' => $customers));
    }
}
?>
