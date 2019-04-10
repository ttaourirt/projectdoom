<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Person;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PersonFixtures extends Fixture implements DependentFixtureInterface
{



    public function load(ObjectManager $manager)
    {


        // $product = new Product();
        // $manager->persist($product);
        $person1 = new Person();
        $person1->setPseudo('MOI')
               ->setLastname('Pikachu')
               ->setLevel(100)
               ->setGuild('Pokemon')
               ->setRank($this->getReference(RankFixtures::RANK_ONE))
               ->setImage('')
               ->setUser($this->getReference(UserFixtures::USER_ONE));

        $manager->persist($person1);
        $manager->flush();

        $person2 = new Person();
        $person2->setPseudo('KAL-EL')
               ->setLastname('Kent')
               ->setFirstname('Clark')
               ->setLevel(90)
               ->setGuild('Alien')
               ->setRank($this->getReference(RankFixtures::RANK_TWO))
               ->setImage('')
               ->setUser($this->getReference(UserFixtures::USER_TWO));

        $manager->persist($person2);
        $manager->flush();

        $person3 = new Person();
        $person3->setPseudo('One-PunchMan')
               ->setLastname('Saitama')
               ->setLevel(90)
               ->setGuild('Human')
               ->setRank($this->getReference(RankFixtures::RANK_TWO))
               ->setImage('')
               ->setUser($this->getReference(UserFixtures::USER_THREE));

        $manager->persist($person3);
        $manager->flush();

        $person4 = new Person();
        $person4->setPseudo('Mugiwara')
               ->setName('Monkey.D')
               ->setFirstname('Luffy')
               ->setLevel(80)
               ->setGuild('Pirate')
               ->setRank($this->getReference(RankFixtures::RANK_FOUR))
               ->setImage('')
               ->setUser($this->getReference(UserFixtures::USER_FOUR));

        $manager->persist($person4);
        $manager->flush();

    }

    public function getDependencies()
    {
        return [
            RankFixtures::class,
            UserFixtures::class,
        ];
    }
}
