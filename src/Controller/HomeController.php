<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class HomeController {


    /**
     * @Route("/", name="home")
     */
    public function home() {
        var_dump("Bienvenue sur la page d'accueil"); die;

    }


    /**
     * @Route("/", name="test")
     */
    public function test() {
        var_dump("Bienvenue sur la page test"); die;
    }


    /**
     * @Route("/", name="article")
     */
    public function article() {
        var_dump("Bienvenue sur la page article");
    }

    
    /**
     * @Route("/", name="contact")
     */
    public function contact() {
        var_dump("Bienvenue sur la page contact");
    }


}

