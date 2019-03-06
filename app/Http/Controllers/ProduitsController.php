<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produit;

class ProduitsController extends Controller
{
    // ------------ FRONT OFFICE ------------------
    public function listeProduits()
    {
        //$produits = DB::select('select * from produit');
            $produits = Produit::all()->sortBy('nom');
        return view('frontOffice/listeDesProduits', ['produits' => $produits]);
    }

    public function listeProduitsTrie($type)
    {
        if($type == "nom"){
            $produits = Produit::all()->sortBy('nom');
        }
        else if ($type == "prixAsc") {
            $produits = Produit::all()->sortBy('prix');
        } else {
            $produits = Produit::all()->sortByDesc('prix');
        }
        return view('frontOffice/listeDesProduits', ['produits' => $produits]);
    }

    public function ficheProduit($id)
    {
        //$produit = DB::select('select * from produit where id_produit = :id', ['id' => $id]);
        $produit = Produit::find($id);
        return view('frontOffice/ficheProduit', ['produit' => $produit]);
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
