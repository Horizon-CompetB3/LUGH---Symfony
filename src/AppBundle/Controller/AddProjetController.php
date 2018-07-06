<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Candidatures;
use AppBundle\Form\CandidaturesType;
use AppBundle\Repository\ProjetsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class AddProjetController extends Controller
{
    /**
     * @Route("/add-projet", name="addprojet")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction(Request $request)
    {

        $form = $this->createFormBuilder()

            ->add('from', EmailType::class)
            ->add('nom', EmailType::class)
            ->add('prenom', EmailType::class)
            ->add('message', TextareaType::class)
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dump($data);
            $mailer = $this->get('mailer');

            $message = \Swift_Message::newInstance()
                ->setSubject('Dépot de Projet - LUGH - nom :' . $data['nom'] . '- prénom :' . $data['prenom'])
                ->setFrom($data['from'])
                ->setTo('agence.horizon11@gmail.com')
                ->setBody(
                    $form->getData()['message'],
                    'text/plain'
                )
            ;
            $mailer->send($message);

            $request->getSession()->getFlashBag()->add('notice', 'Votre demande a bien été enregistrée');
            return $this->redirectToRoute('home');
        }

        return $this->render('Registration/addprojet.html.twig', [

            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/add-candidatures", name="add-candidatures")
     * @param Request $request

     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function AddUserAction (Request $request)
    {
// creates a user and gives it some dummy data for this example
        $candidatures = new Candidatures();
        $form_cand = $this->createForm(CandidaturesType::class, $candidatures);
        $form_cand->handleRequest($request);


        if ($form_cand->isSubmitted() && $form_cand->isValid()) {

            $candidatures = $form_cand->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidatures);
            $entityManager->flush();


            return $this->redirectToRoute('login');
        }

        return $this->render('Registration/addcandidature.html.twig', array(
            'controller_name' => 'AddUserController',
            'form_cand' => $form_cand->createView(),

        ));
    }
    /**
     * @Route("/projets", name="projets")
     */
    public function allprojets(ProjetsRepository $projetsRepository)
    {
        $projets = $projetsRepository->findAll();

        return $this->render('content/allprojets.html.twig', [
            'controller_name' => 'AddProjetController',
            'projets' => $projets
        ]);
    }
}
