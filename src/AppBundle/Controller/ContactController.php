<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
public function contactAction(Request $request)
{

    $form = $this->createFormBuilder()
        ->add('nom', TextType::class)
        ->add('from', EmailType::class)
        ->add('message', TextareaType::class)
        ->add('send', SubmitType::class)
        ->getForm();

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        dump($data);
        $mailer = $this->get('mailer');

        $message = \Swift_Message::newInstance()
            ->setSubject('Demande de contact')
            ->setFrom($data['from'])
            ->setTo('agence.horizon11@gmail.com')
            ->setBody(array( $form->getData()['message'],
                    'text/plain',
                    $data['nom'])

            )
        ;
        $mailer->send($message);
    }

    return $this->render('content/contact.html.twig', [

        'form' => $form->createView()
    ]);
}
}
