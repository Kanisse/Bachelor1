<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProduitController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $categorie=Categorie::find(13);
        $produit=$categorie->produit;
    
        return view('CRUD.index', compact('produit'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('CRUD.ajouter', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit=  new Produit;
        $produit->Nom_Produit=$request->input("Nom");
        $produit ->Prix_Produit =$request->input("Prix");
        $produit->categorie_id=$request->input('categorie_id');
        $produit->save(); 
        return redirect()
        ->route('produit.index')
        ->with('success','Ajout de produit avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit=Produit::find($id);
        $categorie = $produit->categorie->Nom_Cat;    
        return view('CRUD.afficher',
        compact('produit','categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit=Produit::find($id);
        return view('CRUD.modifier',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit= Produit::find($id);
        $produit->Nom_Produit=$request->input("Nom");
        $produit ->Prix_Produit =$request->input("Prix");
       $produit->update();
       return redirect()
       ->route('produit.index')
       ->with('success','Modification avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit=Produit::find($id);
        $produit->delete();
        return redirect()
        ->route('produit.index')
        ->with('success','Suppression avec succès');
    }
}
