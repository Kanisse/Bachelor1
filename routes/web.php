<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

Route::resource('produit',App\Http\Controllers\ProduitController::class);

Route::resource('facture',App\Http\Controllers\FactureController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');