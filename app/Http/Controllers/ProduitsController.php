<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    private $catalog = 
    [
        "STAN SMITH PYTHON" => [
            "Name"  => "STAN SMITH PYTHON",
            "Price" => 99.95,
            "Photo" => "images/stan_smith_python.jpg",
        ],
        "STAN SMITH BLANC" => [
            "Name"  => "STAN SMITH BLANC",
            "Price" => 99.95,
            "Photo" => "images/stan_smith_white_python.jpg",
        ],
        "STAN SMITH NOIRE" => [
            "Name"  => "STAN SMITH NOIRE",
            "Price" => 119.95,
            "Photo" => "images/stan_smith_new_bold.jpg",
        ],
    ];
    public function listeProduits()
    {
        return view('frontOffice/listeDesProduits', ['produits'=>$this->catalog]);
    }

    public function ficheProduit($id)
    {
        return view('frontOffice/ficheProduit', ['id' => $id, 'article'=>$this->catalog[$id]]);
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
