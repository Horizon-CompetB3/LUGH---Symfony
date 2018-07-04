<?php

namespace AppBundle\Controller;

use AppBundle\Repository\ProjetsRepository;
use AppBundle\Entity\Projets;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


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

    /**
     * @Route("/all-projets/{id_projet}", name="projets")
     */

    public function pageprojets(ProjetsRepository $projetsRepository, $id_projet)
    {
        $projets = $projetsRepository->findOneBy(array('name' => $id_projet));



        return $this->render('Content/projets.html.twig', [
            'projets' => $projets,
        ]);
    }

}