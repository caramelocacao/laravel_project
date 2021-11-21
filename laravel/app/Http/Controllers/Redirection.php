<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Redirection extends Controller
{
    public function index()
    {
        return view('HTML/contenu/catalogue');
    }
    public function produit()
    {
        return view('HTML/contenu/produit');
    }
    public function panier() 
    {
        return view('HTML/contenu/panier');
    }
    public function admin() 
    {
        return view('HTML/contenu/admin');
    }
        public function login() 
    {
        return view('HTML/connexion/login');
    }
    public function reset() 
    {
        return view('HTML/connexion/reset');
    }
    public function register() 
    {
        return view('HTML/connexion/register');
    }
   
       public function store(Request $request)
    {
    $this->validate($request->all(), [
        'email' => 'required',
        'password' => 'required'
    ]);

    $spkAdmin = SpkAdmin::create($request->all());
    return "email : " . request('email') . 'mdp :' . request('password');
    }
}

 
