<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
     <!-- Compiled and minified CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="{{ url('css/nav.css') }}">
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <!-- Logo en la barra de navegacion -->
    <div class="container-fluid">
        
        <img src="{{ url('img/Logo-ondablue.png') }}" alt="Logo" width="200" height="50" class="d-inline-block align-text-top">
        <a href="{{ route('facturas.index') }}"  class="btn btn-outline-primary">Factura</a>
                <a href="{{ route('detalles.index') }}"  class="btn btn-outline-primary">Detalle</a>
                <a href="{{ route('prendas.create') }}"  class="btn btn-outline-primary">Prenda</a>
         <div class="btn-group">        
         
      


    <ul>
        
        @if(auth()->check())
        
           <p class="blue-text text-darken-2">Bienvenid@ <b>{{  auth()->user()->name  }}</b></p> 
            <a href="{{ route('login.destroy') }}"  class="btn btn-outline-danger">Salir</a>
    
    @else
            <a href="{{ route('login.index') }}" class="btn btn-outline-primary">Login</a>
            <a href="{{ route('register.index') }}"  class="btn btn-outline-primary">Registro</a>
    @endif
    </ul>
</div>
</nav>
    @yield('content')

    
</body>

</html>