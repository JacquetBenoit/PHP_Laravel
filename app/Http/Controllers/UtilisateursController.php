<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function panier()
    {
        return view('frontOffice/panier');
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
