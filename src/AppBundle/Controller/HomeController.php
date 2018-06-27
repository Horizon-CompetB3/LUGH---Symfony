<?php

namespace AppBundle\Controller;

use AppBundle\Repository\ProjetsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {



        return $this->render('home.html.twig');
    }
}

