<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Rank;
use App\Repository\RankRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'title1' => 'Welcome Traveler !',
            'title2' => 'Welcome Back Traveler !'
        ]);
    }

    /**
     * @Route("/ranks", name="ranks")
     */
    public function rank(RankRepository $repo)
    {

        $ranks = $repo->findAll();

        return $this->render('home/rank.html.twig', [
            'ranks' => $ranks
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    // public function register(
    //     Request $request,
    //     EntityManagerInterface $manager,
    //     UserPasswordEncoderInterface $encoder
    //     ) {
    //     $person = new Person();
    //     $form = $this->createFormBuilder($person)
    //         ->add('email', EmailType::class)
    //         ->add('password', PasswordType::class)
    //         ->add('pseudo', TextType::class)
    //         ->add('name', TextType::class)
    //         ->add('firstname', TextType::class)
    //
    //         ->getForm();
    //
    //     $form->handleRequest($request);
    //
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $user->setRank(['Beggar']);
    //
    //         $encoded = $encoder->encodePassword($person, $form['password']->getData());
    //         $user->setPassword($encoded);
    //
    //         $manager->persist($person);
    //         $manager->flush();
    //         return $this->redirectToRoute('home');
    //     }
    //
    //     return $this->render('default/register.html.twig', [
    //         'register_form'=> $form->createView()
    //     ]);
    // }

}
