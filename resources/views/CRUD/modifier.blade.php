@extends('structure')

@section('content')
  
<h2>Modification de produit</h2>

<div class="form-group">
<form action="{{ route('produit.update',$produit->id) }}" method="post">
@csrf
@method('PATCH')

<label> Nom : </label>
<input type="text" class="form-control" name="Nom" value="{{ $produit->Nom_Produit }}">

<label> Prix : </label>
<input type="text" class=" form-control" name="Prix" value="{{ $produit->Prix_Produit }}">

<button type="submit" class="btn btn-primary"> Modifier</button>

</form>
</div>

@endsection