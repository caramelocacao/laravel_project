<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function panier() 
    {
        return view('HTML/contenu/panier');
    }
}
