<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Repository\ContactsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contacts", name="app_contacts", methods={"GET"})
     */
    
    public function listeContacts(ContactsRepository $repo): Response
    {
       // $manager = $this->getDoctrine()->getManager();
        //$repo = $manager->getRepository(Contacts::class);
        $contacts = $repo->findAll();
        //dump($contacts);
        return $this->render('contact/listeContacts.html.twig', [
            /*'controller_name' => 'ContactController',*/
            'lesContacts'=> $contacts
        ]);
    }
    /** @Route("/contact/{id}", name="ficheContact", methods={"GET"})
    */
   public function ficheContact($id, ContactsRepository $repo): Response
   {
       $contact = $repo-> find($id);
       return $this->render('contact/ficheContact.html.twig', [
           /*'controller_name'=>'ContactController',*/
           'leContact'=>$contact
       ]);
   }
}
