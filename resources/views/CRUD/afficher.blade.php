@extends('structure')

@section('title', 'Détails produits')

@section('content')


<div style="padding-top: 100px">

<h1>Détails du produit : </h1>

<table class="table table-dark">
<tr><td>Nom du produit </td> <td>{{ $produit->Nom_Produit }} </td>
<tr><td>Prix du produit </td> <td> {{ $produit->Prix_Produit }} DH</td>
<tr><td>Catégorie du produit :  </td> <td> {{  $categorie  }}</td>
<tr>  
 <td> <a class="btn btn-primary" href="{{ route('produit.index') }}">Revenir</a></td>

 <td>  
      </td>
</tr>

</table>   

<h2>Les commentaires</h2>
<ul>
@foreach($posts as $value1)
<li class="list-group-item list-group-item-dark">
      ({{ $value1->text}}) </li>   
@endforeach

</ul>

</div>

<h1>Les factures </h1>

<ul>
      @foreach($factures as $value2)
      <li class="list-group-item list-group-item-dark">
            ({{ $value2->Adresse_facture}}) </li>   
      @endforeach
      
      </ul>



@endsection