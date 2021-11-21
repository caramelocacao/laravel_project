<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        return view('HTML/contenu/catalogue');
    }
}
