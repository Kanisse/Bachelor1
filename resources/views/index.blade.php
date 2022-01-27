@extends('structure')

@section('content')

<div style="padding-top: 100px">
  
 <h1>La liste des factures</h1>


 <ul>
 @foreach($factures as  $value)
   <li> Facture N° : {{ $value ->id }}</li>
<ul>
   @foreach($value -> produits as  $produit)
     <li>Nom :  {{ $produit -> Nom_Produit}} | Prix : {{ $produit -> Prix_Produit }}</li>
   @endforeach
  </ul>
 @endforeach

</ul>
</div>
@endsection
