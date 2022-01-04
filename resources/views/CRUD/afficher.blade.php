@extends('layouts.app')

@section('content')

<style>
  body{
    font-size: 24pt;
    font-family: Georgia, 'Times New Roman', Times, serif;
  }
</style>
<h1>Détails du produit : </h1>

<table>
<tr><td>Nom du produit </td> <td>{{ $produit->Nom_Produit }} </td>
<tr><td>Prix du produit </td> <td> {{ $produit->Prix_Produit }} DH</td>
<tr><td>Catégorie du produit </td> <td> {{  $categorie  }}</td>

<tr>  
 <td> <a class="btn btn-primary" href="{{ route('produit.index') }}">Revenir</a></td>

 <td>  
      </td>
</tr>

</table>   
  @endsection