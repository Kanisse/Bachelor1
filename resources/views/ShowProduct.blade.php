<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  

  @foreach($produit as $value)
    <h3>{{ $value->Nom_Produit }}</h3><br/>
  @endforeach

</body>
</html>