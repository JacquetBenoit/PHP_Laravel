<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\Command_ligne;
use App\product;

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
        $command = Command::all()
            ->sortBy('id_ORDER');

        $command_ligne = Command_ligne::all();

        $products = product::all();

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command, 'commands_ligne' => $command_ligne, 'Produits' => $products]);

    }
}
