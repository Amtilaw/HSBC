<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use App\Entity\Personne;
use Doctrine\ORM\EntityManagerInterface;

class ContactFormController extends AbstractController
{
    /**
     * @Route("/contact/form", name="contact_form")
     */
    public function index(Request $request): Response
    {
        $user = new Personne();


        $form = $this->createForm(ContactType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $user = $form->getData();

        $entityManager = $this->getDoctrine()->getManager();


        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return $this->redirectToRoute('contact_view');
        }

        return $this->renderForm('contact_form/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form,
        ]);
    }
}

