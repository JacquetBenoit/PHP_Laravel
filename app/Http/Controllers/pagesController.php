<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    

    


    public function ficheProduit($id)
    {
        return view('frontOffice/ficheProduit', ['id' => $id]);
    }
}
