<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EntrepriseController extends Controller
{
    /**
     * @Route("/construct", name="construct")
     */
    public function index()
    {
        return $this->render('construct.html.twig');
    }


}
