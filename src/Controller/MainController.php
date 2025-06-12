<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController {

    #[Route('/', 'home')]
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
      #[Route('/login')]
    public function login():Response{
        return $this->render('main/login.html.twig');
    }
      #[Route('/product')]
    public function product():Response{
        return $this->render('main/product.html.twig');
    }
      #[Route('/admin')]
    public function admin():Response{
        return $this->render('main/admin.html.twig');
    }
}