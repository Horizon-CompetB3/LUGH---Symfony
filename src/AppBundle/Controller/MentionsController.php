<?php

namespace AppBundle\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MentionsController extends Controller
{
    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions()
    {



        return $this->render('mentions.html.twig', [
            'controller_name' => 'MentionsController',
        ]);
    }










}