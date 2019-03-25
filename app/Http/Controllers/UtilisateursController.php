<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\product;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use App\User;

class UtilisateursController extends Controller
{

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
        $id = Auth::id();
        $user = user::find($id);
        $customer = customer::where('id_USER', $id)->first();


        return view('frontOffice/monCompte', ['user' => $user, 'customer' => $customer]);
    }

    public function creerCompte()
    {
        return view('frontOffice/creerCompte');
    }

    public function commande()
    {
        return view('frontOffice/commandes');
    }

    public function edit (Request $request)
    {
        dd($request);
        $id = Auth::id();
        $user = user::find($id);

        return view('frontOffice/monCompte', ['user' => $user]);
    }


}
