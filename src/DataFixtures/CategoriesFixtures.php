<?php

namespace App\DataFixtures;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = new Categorie();
        $categories->setLibelle("Professionnel")
                    ->setDescription("Nice")
                    ->setImage("https://picsum.photos/id/5/200/300/");
        $manager->persist($categories);
        $categories = new Categorie();
        $categories->setLibelle("Privé")
                    ->setDescription("Cool")
                    ->setImage("https://picsum.photos/id/73/200/300/");
        $manager->persist($categories);            
        $categories = new Categorie();
        $categories->setLibelle("Sport")
                    ->setDescription("Fine")
                    ->setImage("https://picsum.photos/id/342/200/300/");
        $manager->persist($categories);

        $manager->flush();
    }
}
