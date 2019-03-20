<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProduitAdminController extends Controller
{
    public function gestionProduits()
    {
        $products = Product::all()
            ->sortBy('NAME');
        return view('admin/gestionProduits', ['products' => $products]);
    }

    public function ajoutProduit()
    {
        $produit = new Product();
        return view('admin/ajoutProduit', ['produit' => $produit]);
    }

    public function store(Request $request)
    {
        Product::updateOrCreate(['id_PRODUCT' => $request->input('id')], $request->all());

        return redirect()->route('gestionProduits');
    }

    public function delete($id)
    {
        return view('admin/deleteProduit', ['id' => $id]);
    }

    public function destroy($id)
    {
        $produit = Product::where('id_PRODUCT', $id);
        $produit->delete();
        return redirect()->route('gestionProduits');
    }

    public function update($id)
    {
        $produit = Product::where('id_PRODUCT', $id)->first();
        return view('admin/ajoutProduit', ['produit' => $produit]);
    }
}
