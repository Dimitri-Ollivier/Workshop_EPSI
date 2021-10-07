<?php

namespace App\DataFixtures;

use App\Entity\Employer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class EmployerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i <= 10; $i++) {
            $employeur = new Employer();

            $employeur->setNom($faker->lastName)
                ->setPrenom($faker->firstName)
                ->setEntreprise($faker->company)
                ->setMail($faker->email)
                ->setSexe($faker->randomElement($array = array ('male', 'female')));

            $manager->persist($employeur);
        }

        $manager->flush();
    }
}
