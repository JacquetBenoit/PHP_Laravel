<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitsController extends Controller
{
    // ------------ FRONT OFFICE ------------------

    public function listeProduits()
    {
        $produits = DB::select('select * from produit');
        return view('frontOffice/listeDesProduits', ['produits' => $produits]);
    }

    public function ficheProduit($id)
    {
        $produit = DB::select('select * from produit where id_produit = :id', ['id' => $id]);
        return view('frontOffice/ficheProduit', ['produit' => $produit[0]]);
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
