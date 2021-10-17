<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PersonneRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Personne;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class ContactModifController extends AbstractController
{
    /**
     * @Route("/contact/modif", name="contact_modif")
     */
    public function index(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Personne::class);

        $product = $repository->find($_GET["id"]);
        $user = new Personne();
        $user->setName($product->getName());
        $user->setEmail($product->getEmail());
        $user->setNumero($product->getNumero());


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

        return $this->renderForm('contact_modif/index.html.twig', [
            'controller_name' => 'ContactModifController',
            'form' => $form,
            'pp' => $user,
            'id' => $_GET["id"],
        ]);
    }

    /**
     * @Route("/contact/modif/supp", name="contact_modif_supp")
     */
    public function index2(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Personne::class);

        $product = $repository->find($_GET["id"]);
        $entityManager->remove($product);
        $entityManager->flush();
        return $this->redirectToRoute('contact_view');
        }

    }

