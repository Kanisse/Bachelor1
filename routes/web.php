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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('CatProduit', App\Http\Controllers\CatProduitController::class,'index');

Route::get('CatProduit\{$produit}', App\Http\Controllers\CatProduitController::class,'show')
-> name('catproduct');



