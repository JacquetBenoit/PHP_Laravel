<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class pagesController extends Controller
{
    

    


    public function ficheProduit($id)
    {
        return view('frontOffice/ficheProduit', ['id' => $id]);
    }
}
