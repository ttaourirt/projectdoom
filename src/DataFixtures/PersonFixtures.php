<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Person;

class PersonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $person1 = new Person();
        $person1->setPseudo('coca')
               ->setName('toto')
               ->setLevel(100)
               ->setGuild('Maroc')
               ->setRank('Roi');

        $manager->persist($person1);
        $manager->flush();
    }
}
