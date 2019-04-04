<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Game;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class GameFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $game1 = new Game();
        $game1->setName('Puzzle')
            ->setDescription("Retrouve ton chemin en remmttant en place la carte déchirer retrouvé dans la grotte")
            ->setLand($this->getReference(LandFixtures::LAND_ONE));

        $manager->persist($game1);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            LandFixtures::class,
        ];
    }
}
