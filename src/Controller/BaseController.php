<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends Controller
{
    /**
     * @Route("", name="")
     */
    public function index()
    {
      return $this->redirectToRoute('welcome');
    }
}
