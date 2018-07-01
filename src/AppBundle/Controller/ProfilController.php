<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\CompleteArtisteType;
use AppBundle\Form\CompleteEntrepriseType;
use AppBundle\Form\InfoArtisteType;
use AppBundle\Form\InfoEntType;
use AppBundle\Form\ProfilEntType;
use AppBundle\Form\RealisationsType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfilController extends Controller
{
    /**
     * @Route("/profil", name="profil")
     */
    public function profile()
    {



        return $this->render('Content/profil.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function ProfilEditArtisteAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($user->getId());
        $form_art = $this->createForm(CompleteArtisteType::class, $user);
        $form_art->handleRequest($request);
        if ($form_art->isSubmitted()) {
            dump($form_art->getData());
        }
        if ($form_art->isSubmitted() && $form_art->isValid()) {

            $editUser = $form_art->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($editUser);
            $em->flush();
            return $this->redirectToRoute('home');
        }

        //


        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($user->getId());
        $form_ent = $this->createForm(CompleteEntrepriseType::class, $user);
        $form_ent->handleRequest($request);
        if ($form_ent->isSubmitted()) {
            dump($form_ent->getData());
        }
        if ($form_ent->isSubmitted() && $form_ent->isValid()) {
            /** @var User $editUser */
            $editUser = $form_ent->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($editUser);
            $em->flush();
            return $this->redirectToRoute('home');
        }

        //

        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($user->getId());
        $form_real = $this->createForm(RealisationsType::class, $user);
        $form_real->handleRequest($request);

        if ($form_real->isSubmitted() && $form_real->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $user->getRealisations();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('upload_files'),
                $fileName);


            ;

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $user->setRealisations($fileName);
            $editUser = $form_real->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($editUser);
            $em->flush();

            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('home'));
        }

        //


            $user = $this->getUser();
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->find($user->getId());
            $form_info = $this->createForm(InfoArtisteType::class, $user);
            $form_info->handleRequest($request);
            if ($form_info->isSubmitted()) {
                dump($form_info->getData());}

            if ($form_info->isSubmitted() && $form_info->isValid()) {

                $editUser = $form_info->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($editUser);
                $em->flush();
                return $this->redirectToRoute('home');
            }

            //

        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($user->getId());
        $form_info_ent = $this->createForm(InfoEntType::class, $user);
        $form_info_ent->handleRequest($request);
        if ($form_info_ent->isSubmitted()) {
            dump($form_info_ent->getData());}

        if ($form_info_ent->isSubmitted() && $form_info_ent->isValid()) {

            $editUser = $form_info_ent->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($editUser);
            $em->flush();
            return $this->redirectToRoute('profil');
        }


        //

        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($user->getId());
        $form_profil_ent = $this->createForm(ProfilEntType::class, $user);
        $form_profil_ent->handleRequest($request);
        if ($form_profil_ent->isSubmitted()) {
            dump($form_profil_ent->getData());}

        if ($form_profil_ent->isSubmitted() && $form_profil_ent->isValid()) {

            $editUser = $form_info_ent->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($editUser);
            $em->flush();
            return $this->redirectToRoute('profil');
        }

        return $this->render('content/profil.html.twig', [
            'form_art'=>$form_art->createView(),
            'form_ent'=>$form_ent->createView(),
            'form_real'=>$form_real->createView(),
            'form_info'=>$form_info->createView(),
            'form_info_ent'=>$form_info_ent->createView(),
            'form_profil_ent'=>$form_profil_ent->createView(),
            ]);
    }
        /**
         * @return string
         */
        private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }




}