<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthoreController extends AbstractController
{
    #[Route('/authore', name: 'app_authore')]
    public function index(): Response
    {
        return $this->render('authore/index.html.twig', [
            'controller_name' => 'AuthoreController',
        ]);
    }
    #[Route('/showauthore/{name}', name: 'app_authore_show')]
    public function showAuthor($name)
    {
        return $this->render('authore/show.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/authore/list', name: 'app_authore_list')]
    public function listAuthor()
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' =>'Victor Hugo', 'email'=>
            'victor.hugo@gmail.com', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' =>'William Shakespeare', 'email'=>
            'william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' =>'Taha_Hussein', 'email'=>
            'Taha_Hussein@gmail.com', 'nb_books' => 300),
            );
            return $this->render('authore/list.html.twig', [
                'authors' => $authors,
            ]);
    }
}
