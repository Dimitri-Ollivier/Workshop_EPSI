<?php

namespace App\DataFixtures;

use App\Entity\Evenement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class EvenementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i <= 35; $i++) {
            $evenement = new Evenement();

            $evenement->setTitre($faker->domainName)
                ->setLieu($faker->city)
                ->setDescription("Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur")
                ->setMail($faker->companyEmail)
                ->setTel(07070707)
                ->setNomOrganisateur($faker->lastName & " " & $faker->firstName)
                ->setDateDeCreation(new \DateTime());

            $manager->persist($evenement);
        }

        $manager->flush();
    }
}
