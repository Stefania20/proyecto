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
     <link rel="stylesheet" href="{{ url('css/app.css') }}">
    
</head>
<body>
<nav class="nav-wrapper teal lighten-2">
    <div>
        <p>OndaBlue</p>
    </div>
    <ul>
        @if(auth()->check())
        <li>
           <p class="blue-text text-darken-2">Bienvenid@ <b>{{  auth()->user()->name  }}</b></p>
        </li>
        <li>
            <a href="{{ route('login.destroy') }}"  class="red-text text-darken-2">Salir</a>
        </li>
    @else
        <li>
            <a href="{{ route('login.index') }}" class="blue-text text-darken-2">Login</a>
        </li>
        <li>
            <a href="{{ route('register.index') }}"  class="blue-text text-darken-2">Registro</a>
        </li>
    @endif
    </ul>
</nav>
    @yield('content')

    
</body>
</html>