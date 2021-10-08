<?php

namespace App\DataFixtures;

use App\Entity\Emploi;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class EmploiFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i <= 50; $i++) {
            $emploi = new Emploi();
            $emploi->setTitre($faker->domainName)
                ->setLieu($faker->city)
                ->setDescription("Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur")
                ->setMail($faker->companyEmail)
                ->setTel(07070707)
                ->setHandicapBan($faker->boolean())
                ->setNomEmployeur($faker->lastName & " " & $faker->firstName)
                ->setNomEntreprise($faker->company)
                ->setDateDeCreation(new \DateTime());

            $manager->persist($emploi);
        }

        $manager->flush();
    }
}