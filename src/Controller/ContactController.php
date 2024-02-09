<?php

namespace App\Controller;

use App\Entity\Contacts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact", methods={"GET"})
     */
    public function listeContacts(): Response
    {
        $manager = $this->getDoctrine()->getManager();
        $repo = $manager->getRepository(Contacts::class);
        $contacts = $repo->findAll();
        return $this->render('contact/listeContacts.html.twig', [
            /*'controller_name' => 'ContactController',*/
            'lesContacts'=> $contacts
        ]);
    }
}
