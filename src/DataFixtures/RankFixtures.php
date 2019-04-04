<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Rank;

class RankFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $rank1 = new Rank();
        $rank1->setTitle('Roi');

        $manager->persist($rank1);
        $manager->flush();
    }
}
