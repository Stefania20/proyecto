@extends('layouts.app')
@section('title' , 'Home')
@section('content')

<div>
    <h1>Login</h1>

    <form action="" method="POST">
        <input type="email" placeholder="Email" id="email" name="email">
        <p> </p>
        <input type="passwoord" placeholder="Password" id="password" name="password">
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection