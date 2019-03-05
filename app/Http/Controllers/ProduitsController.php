<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProduitsController extends Controller
{
   
    public function listeProduits($check)
    {   
        if ($check === 'check'){

            $products = Product::all()
            ->sortBy('PRICE');
        } else {

            $products = Product::all()
            ->sortBy('NAME');
        }    
        return view('frontOffice/listeDesProduits', ['products' => $products]);
    }


// -------------------- fiche produit --------------------------------    

    public function ficheProduit($id)
    {
        $product = Product::where('NAME', '=', $id)->first();

        return view('frontOffice/ficheProduit', ['product'=>$product]);
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
