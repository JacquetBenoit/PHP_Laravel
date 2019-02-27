<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function accueil()
    {
        return view('public/accueil');
    
    }

    public function listeProduits()
    {
        return view('public/listeDesProduits');
    }

    public function panier()
    {
        return view('public/panier');
    }

    public function ficheProduit($id)
    {
        return view('public/ficheProduit', ['id' => $id]);
    }
}
