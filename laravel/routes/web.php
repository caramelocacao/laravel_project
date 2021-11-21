<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\ResetController; 
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\CatalogueController; 
use App\Http\Controllers\ProduitController; 
use App\Http\Controllers\PanierController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[CatalogueController::class, 'index'])->name('catalogue');
Route::get('/produit',[ProduitController::class, 'produit'])->name('produit');
// Route::get('/register',[RegisterController::class, 'register'])->name('register');
// Route::post('/register',[RegisterController::class, 'store'])->name('store');
Route::get('/reset',[ResetController::class, 'reset'])->name('reset');
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/admin',[AdminController::class, 'admin'])->name('admin');
Route::get('/panier',[PanierController::class, 'panier'])->name('panier');
Route::post('/login', [LoginController::class, 'verify']);
Route::middleware('auth')->group(function () {
    Route::get('/panier', [PanierController::class, 'panier']);
    Route::get('/disconnect', [LoginController::class, 'disconnect'])->name('logout');
});
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'verify']);

});

// Route::get('/inscription',[LoginController::class, 'store'])->name('formulaire');

/*
Route::post('/inscription', function (){
    $utilisateur = App\users::create([ 	
        'email'=>request('email'),
        'password'=> bcrypt(request('password')),
    ]);	
    return "email : " . request('email') . ' mdp :' . request('password');
});
*/



