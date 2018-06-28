<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
        ->add('from', EmailType::class)
        ->add('message', TextareaType::class)
        ->add('send', SubmitType::class)
        ->getForm()

    ;

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        dump($data);
        $message =\Swift_Message::newInstance()
            ->setSubject('Support from submissions')
            ->setFrom($data['from'])
            ->setTo('alex.s95120@gmail.com')
            ->setBody(
                $form->getData()['message'],
                'text/plain'
            );
        $this->get('mailer')->send($message);
    }

    return $this->render('content/contact.html.twig', [

        'form' => $form->createView()
    ]);
}
}