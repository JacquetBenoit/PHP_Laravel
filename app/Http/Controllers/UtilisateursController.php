<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\Command_ligne;
use App\product;
use App\Customer;

class UtilisateursController extends Controller
{
    public function panier(Request $request)
    {
        $data = $request->session()->get('product', []);
        return view('frontOffice/panier', ['data'=>$data]);
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
        $customers = Customer::all()->sortBy('id_CUSTOMER');
        return view('admin/gestionDesUtilisateurs', ['customers' => $customers]);
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
        $commandelete = Command::where('id_ORDER', $request['idDelete'])->first();
        $commandelete->products()->detach();

        $commandelete = Command::where('id_ORDER', $request['idDelete']);
        $commandelete -> delete();

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

    public function ajoutUtilisateur()
    {
        $customer = new Customer();
        return view('admin/ajoutUtilisateur', ['customer'=>$customer]);
    }

    public function store(Request $request)
    {
        Customer::updateOrCreate(['id_CUSTOMER'=>$request->input('id')],$request->all());

        return redirect()->route('gestionUtilisateurs');
    } 
    
    public function update($id)
    {
        $customer = Customer::where('id_CUSTOMER', $id)->first();
        return view('admin/ajoutUtilisateur', ['customer'=>$customer]);
    }
 
    public function delete($id)
    {
        return view('admin/deleteUtilisateur',['id'=>$id]);
    }
    
    public function destroy($id)
    {
        $produit = Customer::where('id_CUSTOMER', $id);
        $produit -> delete();
        return redirect()->route('gestionUtilisateurs');
    }
}
