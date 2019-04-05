<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Rank;


class RankFixtures extends Fixture
{

    const RANK_ONE = 'GOD';
    const RANK_TWO = 'Superhero';
    const RANK_FOUR = 'Kaizoku Ho ore wa yaru !!';

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $rank1 = new Rank();
        $rank1->setTitle('GOD')
              ->setDescription("As a GOD you have all the powers to do what
              you want on those poor souls of mortals ! You control ascension
              and fallen destiny !");
        $manager->persist($rank1);
        $manager->flush();

        $rank2 = new Rank();
        $rank2->setTitle('Superhero');
        $manager->persist($rank2);
        $manager->flush();

        $rank3 = new Rank();
        $rank3->setTitle('King');
        $manager->persist($rank3);
        $manager->flush();

        $rank4 = new Rank();
        $rank4->setTitle('Kaizoku Ho ore wa yaru !!');
        $manager->persist($rank4);
        $manager->flush();

        $rank5 = new Rank();
        $rank5->setTitle('Knight');
        $manager->persist($rank5);
        $manager->flush();

        $rank6 = new Rank();
        $rank6->setTitle('Pirate');
        $manager->persist($rank6);
        $manager->flush();

        $rank7 = new Rank();
        $rank7->setTitle('Thief');
        $manager->persist($rank7);
        $manager->flush();

        $rank8 = new Rank();
        $rank8->setTitle('Peasant');
        $manager->persist($rank8);
        $manager->flush();

        $rank9 = new Rank();
        $rank9->setTitle('Beggar');
        $manager->persist($rank9);
        $manager->flush();


        $this->addReference(self::RANK_ONE,$rank1);
        $this->addReference(self::RANK_TWO,$rank2);
        $this->addReference(self::RANK_FOUR,$rank4);
    }

}
