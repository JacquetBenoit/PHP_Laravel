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

    public function storePanier(Request $request)
    { 
         $product = Product::find($request->id);
         //$request->session()->flush();
         $request->session()->put('product.' .$request->id, ['product'=>$product, 'quantity'=>$request->quantity]);
         return redirect(route('panier'));
    }

    public function deletePanierItem(Request $request)
    {
        $request->session()->forget('product.' .$request->id);
        return redirect(route('panier'));
    }

    public function deletePanier(Request $request)
    {
        $request->session()->flush();
        return redirect(route('panier'));
    }

    public function modifier_qte(Request $request)
    {
        $product = Product::find($request->id);
        $request->session()->put('product.' .$request->id, ['product'=>$product, 'quantity'=>$request->quantity]);
        return redirect(route('panier'));
    }

    public function commander(Request $request)
    {
        $command = new Command();
        $command->COMMAND_DATE = new \DateTime();
        $command->save();

        foreach ($request->session()->get('product', []) as $product)
        {
            // dd($product);
            $command->products()->attach($product['product'], ['QUANTITY'=>$product['quantity']]);
        }
        $request->session()->forget('product');
        return redirect(route('panier'))->with('status', 'Votre commande est validée!');
    }


// ------------ BACK OFFICE ------------------

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

//                                              PROMOTION

    public function gestionPromos()
    {
        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return view('admin/gestionDesPromos', ['promos' => $promo]);
    }

    public function addPromos(Request $request)
    {
        Promotion::updateOrCreate([
            'START_DATE' => $request->get('START_DATE'),
            'END_DATE' => $request->get('END_DATE'),
            'VALUE' => $request->get('VALUE'),
            'PERCENT' => $request->get('PERCENT')
        ]);

        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return view('admin/gestionDesPromos', ['promos' => $promo]);
    }

    public function detailsPromos(Request $request)
    {
        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');
        $products = Product::all();

        return view('admin/gestionDesPromos', ['promos' => $promo], ['id' => $request["id"]], ["products" => $products]);
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

        return view('admin/gestionDesPromos', ['promos' => $promo], ['id' => $request["id"]], ["products" => $products]);
    }

    public function deletePromos(Request $request)
    {
        $promotion = Promotion::where('id_PROMOTION', $request['idDelete']);
        $promotion->delete();
        Product::updateOrCreate(['id_PROMOTION' => $request->input('idDelete')],
            ['id_PROMOTION' => "0"]
        );


        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return view('admin/gestionDesPromos', ['promos' => $promo]);
    }

    public function deleteProduitPromo(Request $request)
    {
        Product::updateOrCreate(['id_PROMOTION' => $request->input('id')],
            ['id_PROMOTION' => "0"]
        );

        $promo = Promotion::all()
            ->sortBy('id_PROMOTION');

        return view('admin/gestionDesPromos', ['promos' => $promo], ['id' => $request["id"]]);
    }
}
