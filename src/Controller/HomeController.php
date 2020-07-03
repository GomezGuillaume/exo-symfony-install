<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController {


    /**
     * @Route("/", name="home")
     */
    public function home(Request $request) {

        $age = $request->query->get('age');
        var_dump($age); die;

    }


    /**
     * @Route("/test", name="test")
     */
    public function test() {
        var_dump("Bienvenue sur la page test"); die;
    }


    /**
     * @Route("/article", name="article")
     */
    public function article() {
        var_dump("Bienvenue sur la page article"); die;
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact() {
        var_dump("Bienvenue sur la page contact"); die;
    }

    /**
     * @Route("/poker", name = "poker")
     */
    public function poker(Request $request) {
        dump($request); die;
        $age = $request->query->get("age");

        if($age >= 18) {
            var_dump("Bienvenue sur le site, vous êtes majeur"); die;
        } else {
            var_dump("Erreur, vous n'avez pas l'âge requis"); die;
        }
    }

}

