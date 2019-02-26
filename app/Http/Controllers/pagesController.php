<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    
    }

    public function listeProduits()
    {
        return view('listeDesProduits');
    }

    public function panier()
    {
        return view('panier');
    }

    public function ficheProduit($id)
    {
        return view('ficheProduit', ['id' => $id]);
    }
}
