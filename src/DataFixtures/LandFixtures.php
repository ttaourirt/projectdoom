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
            ->setDescription("le Gondor a été fondé par les frères Isildur et Anárion, fils d'Elendil, exilés du royaume submergé de Númenor et, avec l'Arnor, le royaume créé par Elendil au nord, il a servi de bastion aux Hommes de l'Ouest. Après une première période de croissance, le Gondor a peu à peu décliné tout au long du Troisième Âge, continuellement affaibli par ses confrontations avec les alliés de Sauron. La puissance du Gondor n'est restaurée qu'après la défaite finale de Sauron et le couronnement d'Aragorn.");

        $manager->persist($land1);
        $manager->flush();

        $this->addReference(self::LAND_ONE,$land1);
    }
}
