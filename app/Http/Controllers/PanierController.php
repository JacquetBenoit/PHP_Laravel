<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Command;
use App\Product;

class PanierController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->only('commander');
    }

    public function panier(Request $request)
    {
        $data = $request->session()->get('product', []);
        return view('frontOffice/panier', ['data'=>$data]);
    }
    
    public function storePanier(Request $request)
    {
         $product = Product::find($request->id);
         $request->session()->put('product.' .$request->id , ['product'=>$product, 'quantity'=>$request->quantity]);
         return redirect('/listeProduits/check');
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
            $command->products()->attach($product['product'], ['QUANTITY'=>$product['quantity']]);
        }
        $request->session()->forget('product');
        return redirect(route('panier'))->with('status', 'Votre commande est validée!');
    }

}
