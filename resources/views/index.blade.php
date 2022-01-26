@extends('structure')


@section('content')


<div style="padding-top: 100px">
<ul>
@foreach($facture as $value)
<li> $value -> Adresse_facture </li>
@foreatch($value ->produit as $prod)
<ul>
<li>{{ $prod -> Nom_Produit}}</li>
</ul>
@endforeach
<ul>
</div>
@endsection