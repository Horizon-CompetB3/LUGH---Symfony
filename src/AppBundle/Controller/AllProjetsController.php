<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Candidatures;
use AppBundle\Repository\ProjetsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AllProjetsController extends Controller
{

    /**
     * @Route("/candidature", name="candidature")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function CandidatureAction (Request $request)
    {
// creates a user and gives it some dummy data for this example
        $candidatures = new Candidatures();
        $form = $this->createForm(CandidaturesType::class, $candidatures);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $candidatures = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidatures);
            $entityManager->flush();

            return $this->redirectToRoute('profil');
        }

        return $this->render('log/registration.html.twig', array(
            'controller_name' => 'AddUserController',
            'form' => $form->createView(),

        ));
    }

}