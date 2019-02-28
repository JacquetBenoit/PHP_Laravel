<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function listeProduits()
    {
        $art_one = [
            "image" => "https://fridg-front.s3.amazonaws.com/media/products/378.jpg",
            "nom" => "carottes",
            "prix" => 2
        ];
        $art_two = [
            "image" => "https://epatantepatate.ca/images/campaign/1x/patate.png",
            "nom" => "patates",
            "prix" => 5
        ];
        $art_three = [
            "image" => "https://i2.wp.com/www.temps-de-cuisson.fr/wp-content/uploads/2016/09/cuisson-choux.jpg",
            "nom" => "choux",
            "prix" => 3
        ];
        $all_art = array("one" => $art_one, "two" => $art_two, "three" => $art_three);
        
        return view('frontOffice/listeDesProduits', ['articles' => $all_art]);
    }

    public function ficheProduit($id)
    {
        return view('frontOffice/ficheProduit', ['id' => $id]);
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
