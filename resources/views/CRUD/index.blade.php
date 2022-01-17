@extends('structure')

@section('content')

<div style="padding-top: 100px">
  <div class="row">

    <div class="col-lg-12">
      
    <a class="btn btn-success" href="{{ route('produit.create') }}"> Ajouter un produit</a>
    
  </div>
  </div>

  <div class="row">
    <div class="col-lg-12 margin-tb">
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        </div>
    @endif

  <table class="table table-sm">
    <tr><th>ID</th><th>Nom</th><th>Prix</th></tr>
  @foreach($produit as $value)
    <tr>
      <td>{{ $value->id }}</td>
      <td>{{ $value->Nom_Produit }}</td>
      <td>{{ $value->Prix_Produit }}</td>
    <td><a class="btn btn-info" href="{{ route('produit.show',$value->id) }}">Afficher</a></td>
      <td><a class="btn btn-warning" href="{{ route('produit.edit',$value->id) }}">Modifier</a></td>
    <td>
      <form action="{{ route('produit.destroy',$value->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Supprimer</button>
      </form>
    </td>
    
  </tr>
  @endforeach
  </table>

{!! $produit->links() !!}

</div>
</div>
@endsection