<?php

namespace App\Controller;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categories", name="app_categorie", methods={"GET"})
     */
    public function listeCategories(CategorieRepository $repo): Response
    {
       // $manager = $this->getDoctrine()->getManager();
        //$repo = $manager->getRepository(Contacts::class);
        $categories = $repo->findAll();
        //dump($contacts);
        return $this->render('categorie/categorie.html.twig', [
            /*'controller_name' => 'CategorieController',*/
            'lesCategories'=> $categories
        ]);
    }
    /**
     * @Route("/categorie/{id}", name="ficheCategorie", methods={"GET"}ate)
     */
    public function ficheCategorie($id, CategorieRepository $repo): Response
    {
       // $manager = $this->getDoctrine()->getManager();
        //$repo = $manager->getRepository(Contacts::class);
        $categorie = $repo-> find($id);
       return $this->render('categorie/ficheCategorie.html.twig', [
           /*'controller_name'=>'CategorieController',*/
           'leCategorie'=>$categorie
        ]);
    }
}
