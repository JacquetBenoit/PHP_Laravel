<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

use App\Promotion;
use Illuminate\Support\Facades\Request as IlluminateRequest;
use App\Command;

class ProduitsController extends Controller
{

    public function listeProduits($check)
    {
        if ($check === 'check') {

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

        return view('frontOffice/ficheProduit', ['product' => $product]);
    }

}
