<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdminFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $nom = "WORKSHOP";
        $prenom = "Admin";
        $mail = "workshop@epsi.fr";

        $admin = new Admin();
        $admin->setNom($nom);
        $admin->setPrenom($prenom);
        $admin->setMail($mail);

        $manager->persist($admin);
        $manager->flush();
    }
}
