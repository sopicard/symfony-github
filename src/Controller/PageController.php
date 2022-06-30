<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// je créé une classe avec le même nom que le fichier dans controller
class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * je créé une route en utilisant des commentaires PHP
     * et @Route pour spécifier l'URL de le page que je veux céer.
     * La route est située au dessus de
     * la méthode à appeler pour la page
     */

    // le but de la fonction est de renvoyer une réponse
    public function home()
    {
    // je renvoie une réponse HTTP grâce à l'objet Response
    //(du composant http fondation de symfony)
    //ça affichera donc "hello accueil" quand l'url"/" sera demandée
        return new Response("Hello Accueil");
    }

    //je dois créer une page contact avec affichage string "contact"
    /**
     * @Route("/contact",name="contact")
     */
        public function contact()
        {
        return new Response("Contact");
        }


}