<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\PDO;

class ProduitAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
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
        $request->validate([
            'NAME' => 'required',
            'DESCRIPTION' => 'required',
            'PRICE' => 'required|numeric|min:0',
            'WEIGHT' => 'required',
            'id_CATEGORY' => 'required',
            'IMAGE' => 'required',
        ]);
        
        Product::updateOrCreate(['id_PRODUCT' => $request->input('id')], $request->all());

        return redirect()->route('gestionProduits');
    }

    public function delete($id)
    {
        return view('admin/deleteProduit', ['id' => $id]);
    }

    public function destroy($id)
    {
        $produit = Product::where('id_PRODUCT', $id)->first();
        $produit->is_ACTIVE = 0;
        $produit->save();
        return redirect()->route('gestionProduits');
    }

    public function update($id)
    {
        $produit = Product::where('id_PRODUCT', $id)->first();
        return view('admin/ajoutProduit', ['produit' => $produit]);
    }
}
