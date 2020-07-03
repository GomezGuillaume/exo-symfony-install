<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class HomeController {

    /**
     * @Route("/", name="home")
     */

    public function home() {
        var_dump("hello home"); die;

    }

}
