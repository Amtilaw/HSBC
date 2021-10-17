<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Doctrine\ORM\EntityManagerInterface;


class ContactViewController extends AbstractController
{
    /**
     * @Route("/contact/view", name="contact_view")
     */
    public function index(): Response
    {
      $repository = $this->getDoctrine()->getRepository(Personne::class);

      $personne = $repository->findAll();
        return $this->render('contact_view/index.html.twig', [
            'controller_name' => 'ContactViewController',
            'personne' => $personne,
        ]);
    }
}

