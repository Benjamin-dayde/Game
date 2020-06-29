<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Personnage;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create("fr_FR");

        // $product = new Product();
        // $manager->persist($product);

        for($i = 0 ; $i < 10 ; $i++){
            $perso = new Personnage();
            $perso->setHealth(1000);
            $perso->setStrength($faker->numberBetween(50, 100));
            $perso->setShield(100);
            $perso->setAgilite($faker->numberBetween(5, 50));
            $perso->setLevels(1);
            $manager->persist($perso);
        }

        $manager->flush();
    }
}
