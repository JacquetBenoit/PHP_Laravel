<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

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
        $customers = Customer::all()->sortBy('id_CUSTOMER');
        return view('admin/gestionDesUtilisateurs', ['customers' => $customers]);
    }

    public function gestionCommandes()
    {
        return view('admin/gestionDesCommandes');
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
