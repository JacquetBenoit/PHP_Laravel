<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function ajouterPanier(Request $request)
    {
        $request->input('add_to_basket');
        dd($request->input('add_to_basket'));
        /*
        dd('ajoute panier ', $request->input('add_to_basket'));
        $request->session()->put('produits', $request->input('add_to_basket'));*/

        return redirect(route('panier'));
    }

    public function panier(Request $request)
    {
        $panier =
            [
                [
                    "id" => 2,
                    "quantite" => 2,
                ],
                [
                    "id" => 14,
                    "quantite" => 1,
                ],
            ];

        $panierProduits = [];
        foreach ($panier as $produit)
        {
            $p = Produit::find($produit["id"]);

            array_push($panierProduits, [
                'produit' => $p, // recupérer produit dans BDD
                'quantite' => $produit["quantite"], // Recupérer quantité
            ]);
        }
        /*$idProduits = $request->session()->get('produits');

        $produits = [];
        foreach ($idProduits as $idProduit)
        {
            $p = Produit::find($idProduit);
            array_push($produits, $p);
            dump($p);
        }*/
       //dd($produits);
//        return view('frontOffice/panier', ['produit'=>$produits]);
        return view('frontOffice/panier', ['panierProduits'=>$panierProduits]);
    }

    public function coordonnees()
    {
        return view('frontOffice/coordonnes');
    }

    public function moyensPaiement()
    {
        return view('frontOffice/moyensDePaiement');
    }

    public function monCompte()
    {
        return view('frontOffice/monCompte');
    }

    public function creerCompte()
    {
        return view('frontOffice/creerCompte');
    }

    public function commande()
    {
        return view('frontOffice/commandes');
    }

// ------------ BACK OFFICE ------------------

    public function gestionUtilisateurs()
    {
        return view('admin/gestionDesUtilisateurs');
    }

    public function gestionCommandes()
    {
        return view('admin/gestionDesCommandes');
    }
}
