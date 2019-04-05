<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    const USER_ONE = 'user1';
    const USER_TWO = 'user2';
    const USER_THREE = 'user3';
    const USER_FOUR = 'user4';

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user1 = new User();
        $user1->setEmail('user1@hotmail.fr')
            ->setPassword($this->passwordEncoder->encodePassword(
                $user1,
                'password1'
            ))
                ->setRoles(['ROLE_ADMIN']);

        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('user2@hotmail.fr')
            ->setPassword($this->passwordEncoder->encodePassword(
                $user2,
                'password2'
            ))
            ->setRoles(['ROLE_USER']);

        $manager->persist($user2);

        $user3 = new User();
        $user3->setEmail('user3@hotmail.fr')
            ->setPassword($this->passwordEncoder->encodePassword(
                $user3,
                'password3'
            ))
            ->setRoles(['ROLE_USER']);

        $manager->persist($user3);

        $user4 = new User();
        $user4->setEmail('user4@hotmail.fr')
            ->setPassword($this->passwordEncoder->encodePassword(
                $user4,
                'password4'
            ))
            ->setRoles(['ROLE_USER']);

        $manager->persist($user4);

        $manager->flush();

        $this->addReference(self::USER_ONE, $user1);
        $this->addReference(self::USER_TWO, $user2);
        $this->addReference(self::USER_THREE, $user3);
        $this->addReference(self::USER_FOUR, $user4);
    }
}
