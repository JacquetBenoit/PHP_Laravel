<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Command;
use App\product;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Address;

class UtilisateursController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->only('monCompte');
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
        $id = Auth::id(); // Récupère l'ID de l'utilisateur connecté
        $user = user::find($id); // Récupère l'utilisateur correspondant à cet ID
        $customer = Customer::firstOrCreate(['id_USER' => $id]); // Récupérer le customer qui a l'ID de l'utilsateur ou si il n'existe pas, va créer cet utilisateur
        Address::firstOrcreate(['id_CUSTOMER' => $customer->id_CUSTOMER]); // De même que précédemment
        // $customer = customer::where('id_USER', $id)->first();

        return view('frontOffice/monCompte', ['user' => $user, 'customer' => $customer]);
    }

    public function creerCompte()
    {
        return view('frontOffice/creerCompte');
    }

    public function commande()
    {
        $id = Auth::id();
        $customer = Customer::where('id_USER', $id)->first();
        $command = Command::all()->where('id_CUSTOMER', $customer->id_CUSTOMER);
        return view('frontOffice/commandes', ['command'=>$command]);
    }

    public function edit (Request $request)
    {
        $id = Auth::id();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'NAME' => 'required',
            'FIRSTNAME' => 'required',
            'STREET1' => 'required',
            'POSTCODE' => 'required',
            'TOWN' => 'required',
            'COUNTRY' => 'required',
        ]);

        $customer = Customer::updateOrCreate(['id_CUSTOMER'=> $request->input('id_c')],$request->all());

        $user = User::updateOrCreate(['id'=>$id],$request->all());

        Address::updateOrCreate(['id_ADDRESS'=>$request->id_ADDRESS],$request->all());

        return view('frontOffice/monCompte', ['user' => $user, 'customer' => $customer]);
    }


}
