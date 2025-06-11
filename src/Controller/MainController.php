<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController {

    #[Route('/')]
    public function home():Response{
        return $this->render('main/homepage.html.twig');
    }
    #[Route('/register')]
    public function register():Response{
        return $this->render('main/register.html.twig');
    }
      #[Route('/contact')]
    public function contact():Response{
        return $this->render('main/contact.html.twig');
    }
}