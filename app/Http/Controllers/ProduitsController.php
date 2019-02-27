<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function listeProduits()
    {
        return view('frontOffice/listeDesProduits');
    }

    public function ficheProduit($id)
    {
        return view('frontOffice/ficheProduit', ['id' => $id]);
    }

// ------------ BACK OFFICE ------------------

    public function gestionProduits()
    {
        return view('admin/gestionProduits');
    }

    public function gestionPromos()
    {
        return view('admin/gestionDesPromos');
    }

}
