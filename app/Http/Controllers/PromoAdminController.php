<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;
use App\product;

class PromoAdminController extends Controller
{
    public function gestionPromos()
    {
        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return view('admin/gestionDesPromos', ['promos' => $promo]);
    }

    public function addPromos(Request $request)
    {
        if ($request->get('START_DATE') && $request->get('END_DATE')) {
            Promotion::updateOrCreate([
                'START_DATE' => $request->get('START_DATE'),
                'END_DATE' => $request->get('END_DATE'),
                'VALUE' => $request->get('VALUE'),
                'PERCENT' => $request->get('PERCENT')
            ]);
        }

        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return redirect()-> route('gestionPromos', ['promos' => $promo]);
    }

    public function detailsPromos(Request $request)
    {
        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');
        $products = Product::all();

        return view('admin/gestionDesPromos',['promos' => $promo, 'id' => $request["id"], "products" => $products]);
    }

    public function assignPromos(Request $request)
    {
        $products = Product::all();

//     --------- Ajoute le produit seulement si l'id existe ------

        foreach ($products as $produit) {
            if ($produit->id_PRODUCT == $request['idProduit']) {
                Product::updateOrCreate(['id_PRODUCT' => $request->input('idProduit')],
                    ['id_PROMOTION' => $request->get('id')]
                );
            }
        }
        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return view('admin/gestionDesPromos', ['promos' => $promo, 'id' => $request["id"], "products" => $products]);
    }

    public function deletePromos(Request $request)
    {
        $promotion = Promotion::where('id_PROMOTION', $request['idDelete']);
        $promotion->delete();

        $products = Product::all();
        foreach($products as $product){
            if($product->id_PROMOTION == $request->input('idDelete')){
                Product::updateOrCreate(['id_PROMOTION' => $request->input('idDelete')],
                    ['id_PROMOTION' => "0"]
                );
            }
        }

        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return view('admin/gestionDesPromos', ['promos' => $promo]);
    }

    public function deleteProduitPromo(Request $request)
    {
        Product::updateOrCreate(['id_PROMOTION' => $request->input('id')],
            ['id_PROMOTION' => "0"]
        );
        $products = Product::all();
        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return view('admin/gestionDesPromos', ['promos' => $promo, 'id' => $request["id"], "products" => $products]);
    }

}
