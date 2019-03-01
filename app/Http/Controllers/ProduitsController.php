<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    private $all_art
    = [
        "carottes" => [
            "image" => "https://fridg-front.s3.amazonaws.com/media/products/378.jpg",
            "nom" => "carottes",
            "prix" => 2,
            "desc" => "Magnifique légume, rend aimable"
        ],
        "patates" => [
            "image" => "https://epatantepatate.ca/images/campaign/1x/patate.png",
            "nom" => "patates",
            "prix" => 5,
            "desc" => "patata !! :)"
        ],
        "choux" => [
            "image" => "https://i2.wp.com/www.temps-de-cuisson.fr/wp-content/uploads/2016/09/cuisson-choux.jpg",
            "nom" => "choux",
            "prix" => 3,
            "desc" => "Chou est un nom vernaculaire ambigu désignant en français certaines plantes de la famille des Brassicacées. Ce sont des légumes comestibles. La plupart des choux sont dotés de feuilles superhydrophobes qui leur confèrent des capacités autonettoyantes."

        ]
    ];


    public function listeProduits()
    {


        return view('frontOffice/listeDesProduits', ['articles' => $this->all_art]);
    }

    public function ficheProduit($id)
    {
        try {
            $article = $this->all_art[$id];
        } catch (\Exception $E) {
            return view('frontOffice/listeDesProduits', ['articles' => $this->all_art]);
        }
        return view('frontOffice/ficheProduit', ['article' => $article]);
    }

    // ------------ BACK OFFICE ------------------

    public function gestionProduits()
    {
        return view('admin/gestionProduits');
    }

    public function gestionPromos()
    {
        return view('admin/gestionDesPromos');
    }
}
