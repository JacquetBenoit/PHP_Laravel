<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories(Request $request)
    {
        // Vérification s'il n'y a pas de date enregistré en session
        if(session('lastProductVisit')){
            $IDlastProductVisit = $request->session()->get('lastProductVisit');
            $product= Product::find($IDlastProductVisit);
        }
        else {
            $categories = Category::all();
            $products = Product::all();
        }
        return view('frontOffice/categories', ['product'=>$product, 'products'=>$products]);
       /* return view('frontOffice/categories', ['product'=>$product, 'categories'=>$categories, 'products'=>$products]);*/
    }
}
