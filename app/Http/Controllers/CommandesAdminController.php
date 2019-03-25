<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\product;
use App\Customer;
use App\Promotion;

class CommandesAdminController extends Controller
{
   
    public function gestionCommandes()
    {
        $command = Command::all()
            ->sortBy('id_ORDER');
        //dd($command);

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command]);

    }

    public function gestionCommande(request $request)
    {

        $command = Command::all()
            ->sortBy('id_ORDER');
        $oneCommand = [];
        foreach ($command as $com) {
            if ($com->id_ORDER === intval($request['id'])) {
                array_push($oneCommand, $com);
            }
        }

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command, 'oneCommand' => $oneCommand[0]]);

    }

    public function deleteCommande(request $request)
    {
        $commandelete = Command::where('id_ORDER', $request['idDelete'])->first();
        $commandelete->products()->detach();

        $commandelete = Command::where('id_ORDER', $request['idDelete']);
        $commandelete -> delete();

        $command = Command::all()
            ->sortBy('id_ORDER');

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command]);

    }

    public function confirmCommande(request $request)
    {
        Command::where('id_ORDER', $request['id'])
            ->update(['LIVRAISON_DATE' => date('Y-m-d')]);

        $command = Command::all()
            ->sortBy('id_ORDER');

        $idCommand = $request['id'];
//

        return view(
            'admin/gestionDesCommandes',
            ['commands' => $command, 'id' => $idCommand]);

    }


}
