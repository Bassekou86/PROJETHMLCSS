<?php

namespace App\DataFixtures;
use App\Entity\Categorie;
use App\Entity\Contacts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Length;

class ContactsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker  = \Faker\Factory::create('fr_FR');
        $categories=[];
        $categories = new Categorie();
        $categories->setLibelle("Professionnel")
                    ->setDescription($faker->sentence(50))
                    ->setImage("https://picsum.photos/id/5/200/300/");
        $manager->persist($categories);
       $Categorie[]= $categories;
        $categories = new Categorie();
        $categories->setLibelle("Privé")
                    ->setDescription($faker->sentence(50))
                    ->setImage("https://picsum.photos/id/73/200/300/");
        $manager->persist($categories);
         $Categorie[]= $categories;          
        $categories = new Categorie();
        $categories->setLibelle("Sport")
                    ->setDescription($faker->sentence(50))
                    ->setImage("https://picsum.photos/id/342/200/300/");
        $manager->persist($categories);
         $Categorie[]= $categories;
        $genres = ["male", "female"];
        for ($i=0 ; $i < 100 ; $i++) {
        $sexe = mt_rand(0,1);
        if ($sexe == 0){
            $type = 'men';
        } elseif($sexe == 1){
            $type = 'women';
        }
        $contacts = new Contacts();
        $contacts->setNom($faker->lastName())
            ->setPrenom($faker->firstName($genres[$sexe]))
            ->setRue($faker->streetAddress())
            ->setCp($faker->numberBetween(33000,75000))
            ->setVille($faker->city())
            ->setMail($faker->email())
            ->setSexe ($sexe)
            ->setAvatar("https://randomuser.me/api/portraits/".$type ."/". $i.".jpg")
            ->setCategorie($Categorie[mt_rand(0,2)]);
    $manager->persist($contacts);
        }
        $manager->flush();
    }
}
