<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class CatProduitController extends Controller
{
    public function index(){
        $produit=Produit::all();
        return view('ShowAllProducts',compact('produit'));
    }

    public function show($id){
        $produit=Categorie::find($id)->listeproduit;
        return view("ShowProduct",compact('produit'));
    }
}
