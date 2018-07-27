<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome\index.html.twig');
    }

    /**
     * @Route("/hello-page/{name}", name="hello_page", defaults={"name" = "CodeReview Videos"}, requirements={"name" = "[A-Za-z]+"})
     */
    public function hello($name){

        return $this->render('hello_page.html.twig', [
            'name' => $name
        ]);
    }
}
