<?php

namespace App\DataFixtures;

use App\Entity\Contacts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ContactsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker  = \Faker\Factory::create('fr_FR');
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
            ->setAvatar("https:://randomuser.me/api/portraits/".$type ."/". $i.".jpg");
    $manager->persist($contacts);
        }
        $manager->flush();
    }
}
