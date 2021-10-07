<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class UtilisateurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i <= 35; $i++) {
            $utilisateur = new Utilisateur();

            $utilisateur->setNom($faker->lastName)
                ->setPrenom($faker->firstName)
                ->setHTAuditif($faker->boolean())
                ->setHTAutisme($faker->boolean())
                ->setHTMaladiesDegeneratives($faker->boolean())
                ->setHTMental($faker->boolean())
                ->setHTPsychique($faker->boolean())
                ->setHTTroublesDys($faker->boolean())
                ->setHTVisuel($faker->boolean())
                ->setStatus($faker->randomElement($array = array ('Employé', 'Chomeur Pro')))
                ->setMail($faker->companyEmail)
                ->setSexe($faker->randomElement($array = array ('male', 'female')));

            $manager->persist($utilisateur);
        }

        $manager->flush();
    }
}
