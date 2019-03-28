<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use \App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;
use App\Customer;
use App\User;
use App\Command;

class UtilisateursAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function gestionUtilisateurs()
    {
        $customers = Customer::all()->sortBy('id_CUSTOMER');
        return view('admin/gestionDesUtilisateurs', ['customers' => $customers]);
    }

    public function ajoutUtilisateur()
    {
        $customer = new Customer();
        return view('admin/ajoutUtilisateur', ['customer'=>$customer]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'NAME' => 'required',
            'FIRSTNAME' => 'required',
            'email' => 'required',
        ]);
        Customer::updateOrCreate(['id_USER'=>$request->input('id')],$request->all());
        User::updateOrCreate(['id'=>$request->input('id')],$request->all());

        return redirect()->route('gestionUtilisateurs');
    } 

    public function update($id)
    {
        $customer = Customer::where('id_CUSTOMER', $id)->first();
        return view('admin/ajoutUtilisateur', ['customer'=>$customer]);
    }

    public function delete($id)
    {
        return view('admin/deleteUtilisateur',['id'=>$id]);
    }

    public function destroy($id)
    {
        $produit = Customer::where('id_CUSTOMER', $id);
        $produit -> delete();
        return redirect()->route('gestionUtilisateurs');
    }

    public function liste($id)
    {
        $customers = Customer::all()->sortBy('id_CUSTOMER');
        $commands = Command::all()->where('id_CUSTOMER', $id);

        return view('admin/gestionDesUtilisateurs', ['customers'=>$customers, 'commands'=>$commands]);
    }
}
