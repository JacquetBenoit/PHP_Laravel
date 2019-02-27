<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatiquesController extends Controller
{
    public function accueil()
    {
        return view('frontOffice/accueil');
    
    }

    public function infos()
    {
        return view('frontOffice/pageInfo');
    
    }
}
