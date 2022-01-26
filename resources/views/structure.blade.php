<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>  @yield('title') </title>

	<link rel="shortcut icon" href="{{ asset('images/gt_favicon.png') }}">
	
	<link rel="stylesheet" media="screen" 
	href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen" >
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">


</head>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
  
    <div class="navbar-header">
      <!-- Button for smallest screens -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">
        <img src="{{ asset('images/logo.png') }}" 
        alt="Progressus HTML5 template"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav pull-right">
        <li class="active"><a href="{{ route('produit.index') }}">Acceuil</a></li>
        <li class="active"><a href="{{ route('facture.index') }}">Factures</a></li>
        <li>
          @if (Route::has('login'))
             @auth
                  <a href="{{ url('/home') }}">Bienvenue {{ Auth::user()->name }}</a>
              @else
                  <a href="{{ route('login') }}">Log in</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          </div>
      @endif

        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>


@yield('content')



  <div class="footer2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 widget">
          <div class="widget-body">
            <p class="simplenav">
              <a href="{{ route('home') }}">Home</a> |
              <a href="{{ route('produit.index') }}">Produits</a> | 
              <a href="{{ route('facture.index') }}">Factures</a> |
              <b><a href="{{ route('login') }}">Se connecter</a></b>
            </p>
          </div>
        </div>

        <div class="col-md-6 widget">
          <div class="widget-body">
            <p class="text-right">
              Copyright &copy; 2022, Mr. KHALD. Crée par <a href="http://imbt.ma/" rel="designer">IMBT</a> 
            </p>
          </div>
        </div>

      </div> <!-- /row of widgets -->
    </div>
  </div>

  




<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{ asset('js/headroom.min.js') }}"></script>
<script src="{{ asset('js/jQuery.headroom.min.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
</body>
</html>


