<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function listeProduits()
    {
        $catalog = 
	    [
            [
                "Name"  => "STAN SMITH PYTHON",
                "Price" => 99.95,
                "Photo" => "images/stan_smith_python.jpg",
            ],
            [
                "Name"  => "STAN SMITH BLANC",
                "Price" => 99.95,
                "Photo" => "images/stan_smith_white_python.jpg",
            ],
            [
                "Name"  => "STAN SMITH NOIRE",
                "Price" => 119.95,
                "Photo" => "images/stan_smith_new_bold.jpg",
            ],
        ];
        return view('frontOffice/listeDesProduits', ['produits'=>$catalog]);
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
