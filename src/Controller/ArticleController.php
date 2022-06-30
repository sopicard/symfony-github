<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//je crée une nouvelle page donc une nouvelle classe
class ArticleController extends AbstractController
{
//je crée une nouvelle route
    /**
     * @Route ("/articles", name="articles")
     */
// et une nouvelle méthode

    public function showArticle(Request $request)
    {
// fake requête SQL "SELECT * FROM article";
        $articles = [
            1 => [
                'title' => 'La canicule, il fait chaud',
                'contenu' => 'je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'contenu' => 'BROUM'
            ],
            3 => [
                'title' => "L'alcool c'est pas cool",
                'contenu' => "Pourquoi y'a cool dans alcool ?"
            ]
        ];
//je récupère l'id que j'ai renseigné dans l'url (puisque ma bdd = fake) grâce au parametre GET
        $id=$request->query->GET('id');
// je trouve l'article, dans la liste des articles, qui correspond à l'id récupéré
        $article = $articles [$id];
// j'affiche titre correspondant à l'id en réponse
        return new Response($article['title']." ".$article['contenu']);
    }

//pour débuguer ses routes en utilisant la ligne de commandes :
//se placer dans le projet en ligne de commandes
// et taper "php bin/console debug:router"


//     si je veux avoir une url plus "propre" je peux utiliser, au lieu d'un query parameter id,
//     une wildcard dans l'url
//     pour ça je créé mon url en précisant que l'id est variable en le passant entre accolades
//     je demande à Symfony de récupérer la valeur de l'id en passant en parametre de la méthode
//     une variable qui a le même nom que la wildcard.

    /**
     * @Route("/articles/{id}",name="articles_wildcard")
     */
    public function articlesWildcard($id)
    {
        $articles = [
            1 => [
                'title' => 'La canicule, il fait chaud',
                'contenu' => 'je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'contenu' => 'BROUM'
            ],
            3 => [
                'title' => "L'alcool c'est pas cool",
                'contenu' => "Pourquoi y'a cool dans alcool ?"
            ]
        ];

        $article = $articles[$id];

        return new Response($article['title']);
    }

}