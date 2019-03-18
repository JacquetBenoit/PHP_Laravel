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
        //dd($command);

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command]);

    }

    public function gestionCommande(request $request)
    {
        $command = Command::all()
            ->sortBy('id_ORDER');

        $idCommand = $request['id'];

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command, 'id' => $idCommand]);

    }

    public function deleteCommande(request $request)
    {
        $commandelete = Command::where('id_ORDER', $request['idDelete']);
        $commandelete -> delete();

        $commanProddelete = Command_ligne::where('id_ORDER', $request['idDelete']);
        $commanProddelete -> delete();

        $command = Command::all()
            ->sortBy('id_ORDER');

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command]);

    }

    public function confirmCommande(request $request)
    {
        Command::where('id_ORDER', $request['id'])
            ->update(['LIVRAISON_DATE' => date('Y-m-d')]);

        $command = Command::all()
            ->sortBy('id_ORDER');

        $idCommand = $request['id'];
//

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command, 'id' => $idCommand]);

    }
}
