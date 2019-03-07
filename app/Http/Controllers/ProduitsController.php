<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produit;

class ProduitsController extends Controller
{
    // ------------ FRONT OFFICE ------------------
    public function listeProduits()
    {
        //$produits = DB::select('select * from produit');
        $produits = Produit::all();
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
        $produits = Produit::all();
        return view('admin/gestionProduits', ['produits' => $produits]);
    }
    public function ajouterProduit()
    {
        //$produit = Produit::all();
        return view('admin/ajouterProduit');
    }
    public function storeAjoutProduit(Request $request)
    {
        Produit::create($request->all());
        return redirect(route('gestionProduits'));
    }
    public function gestionPromos()
    {
        return view('admin/gestionDesPromos');
    }
}
