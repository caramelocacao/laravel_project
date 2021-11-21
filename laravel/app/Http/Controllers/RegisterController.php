<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function register() 
    {
        return view('HTML/connexion/register');
    }
/*
    public function store(Request $request)
    {
        
        $validate = $request -> validate([
            'name' => "min:2|max:20",
            'last_name' => "min:2|max:20",
            'email' => "max:50",
            'password' => "min:8|max:30|confirmed",
        ]);
        //  dd($request);
        $validate["password"]=Hash::make($request->password);
        User::create($validate);
        return redirect('login');

    }
    */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'last_name'=> 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);
        $validate['password'] = bcrypt($request['password']);
        // dd($request);
        $validated = new User($request->all());
        $validated->save();
        return redirect('login'); 
    } 
}
