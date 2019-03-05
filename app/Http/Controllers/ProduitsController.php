<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitsController extends Controller
{
   
    public function listeProduits()
    {
        $products = DB::select('select * from products');

        return view('frontOffice/listeDesProduits', ['products' => $products]);
    }

    public function ficheProduit($id)
    {
        $products = DB::select('select * from products where NAME = ?', [$id]);

        return view('frontOffice/ficheProduit', ['products'=>$products[0]]);
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
