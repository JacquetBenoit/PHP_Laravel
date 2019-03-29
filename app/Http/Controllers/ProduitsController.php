<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;


class ProduitsController extends Controller
{

    public function listeProduits($check)
    {
        if ($check === 'check') {

            $products = Product::all()
                ->sortBy('PRICE');
        } else if($check === 'sort-by-cat'){
            $products = Product::all()
                ->sortBy('id_CATEGORY');

        } else {

            $products = Product::all()
                ->sortBy('NAME');
        }
        return view('frontOffice/listeDesProduits', ['products' => $products]);
    }


// -------------------- fiche produit --------------------------------    

    public function ficheProduit($id)
    {
        $product = Product::where('id_PRODUCT', '=', $id)->first();

        return view('frontOffice/ficheProduit', ['product' => $product]);
    }

}
