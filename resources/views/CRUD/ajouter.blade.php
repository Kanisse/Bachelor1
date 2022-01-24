@extends('structure')


@section('content')
  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h2>Ajouter un produit</h2>

<div class="form-group">
<form action="{{ route('produit.store') }}" method="post">
@csrf

<label> Nom : </label>
<input type="text" class="form-control" name="Nom">

<label> Prix : </label>
<input type="text" class=" form-control" name="Prix" >

<div class="field">
    <label class="label">Catégorie</label>
        <select name="categorie_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->Nom_Cat }}</option>
            @endforeach
        </select>
</div>
<button type="submit" class="btn btn-primary"> Ajouter</button>

</form>
</div>

@endsection