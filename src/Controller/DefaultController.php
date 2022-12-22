<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController{

    public function index(){
        return new Response("<html><body><h1>Page d'accueil!<h1><body><html>");
    }

    public function compte(){
        return new Response("<html><body><h1>Page compte!<h1><body><html>");
    }

}