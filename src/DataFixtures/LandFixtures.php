<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Land;

class LandFixtures extends Fixture
{
    const LAND_ONE = 'gondor';

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $land1 = new Land();
        $land1->setName('Gondor')
            ->setDescription("Gondor was founded by the brothers Isildur and
             Anárion, son of Elendil, exiled from the submerged kingdom of
             Númenor and, with Arnor, the kingdom created by Elendil in the
             north, it served as a stronghold for Westerners.
             After an initial period of growth, the Gondor gradually
             declined throughout the Third Age, continually weakened by
             its confrontations with Sauron's allies. The power of the Gondor
             is restored only after Sauron's final defeat and Aragorn's
             coronation.");

        $manager->persist($land1);
        $manager->flush();

        $this->addReference(self::LAND_ONE,$land1);
    }
}
