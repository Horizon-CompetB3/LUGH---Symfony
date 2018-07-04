<?php

namespace AppBundle\Controller;

use AppBundle\Repository\ProjetsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AllProjetsController extends Controller
{
    /**
     * @Route("/all-projets", name="all-projets")
     */
    public function allprojets(ProjetsRepository $projetsRepository)
    {
        $projets = $projetsRepository->findAll();

        return $this->render('Content/allprojets.html.twig', [
            'controller_name' => 'AllGamesController',
            'projets' => $projets
        ]);
    }
}