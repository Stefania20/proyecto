<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Favicon  -->
    
</head>
<body>
<nav class="nav-wrapper teal lighten-2">
    <div>
        <p>OndaBlue</p>
    </div>
    <ul>
        <li>
        <a href="{{ route('login.index') }}" class="blue-text text-darken-2">Login</a>
        <a href="{{ route('register.index' )}}"  class="blue-text text-darken-2">Registro</a>
    </li>
    </ul>
</nav>
    @yield('content')

    
</body>
</html>