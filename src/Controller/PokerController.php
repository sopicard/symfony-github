<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PokerController extends AbstractController
{
    /**
     * @Route ("poker", name="poker")
     */
    public function poker(Request $request)
    {   $age = $request->query->GET("age");
        if($age >= 18)
        {
            return new Response ("Bienvenue !");
//  Créer une nouvelle page pour enfant "pokemon"
//- Faire hériter PokerController de la classe AbstractController (pour bénéficier de ses méthodes dans PokerController)
//- Utiliser la méthode "redirectToRoute" (issue d'AbstractController) dans la méthode de la page de poker,
// pour rediriger l'utilisateur vers la page pour enfant, s'il a moins de 18 ans

        }else{
            return $this-> redirectToRoute("pokemon");
        }

    }
    /**
     * @Route("pokemon", name="pokemon")
     */
    public function pokemon()
    {
        return new response ("va voir les pokemons !");
    }
    // récupérer dans l'url le paramètre GET d'âge
//si âge> 18 je mets message = "bienvenue"
// sinon "non bienvenue"
//    /**
//     * @Route("/poker", name="poker")
//     */
//je mets en paramètres de la methode poker, la class Request (je demande à symfony l'objet Request) que
// je stocke dans une variable $request
//
    //   public function poker(Request $request)
    //  {
// j'utilise l'objet Request et la propriété query pour récup le paramètre GET d'âge
// et je le stocke dans une variable
    //      $age = $request->query->get("age");
    //      $name = $request->query->get("name");
// si l'âge est >=18 j'accepte l'utilisateur
    //      if ($age >= 18) {
    //          return new Response("Bienvenue ".$name." sur le site de Poker");
// sinon, non !
    //     } else {
    //         return new Response("Dégage morveux !");
    //   }
    //}

}