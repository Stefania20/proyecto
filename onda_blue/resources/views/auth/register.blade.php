@extends('layouts.app')
@section('title' , 'Home')
@section('content')

<div>
    <h1>Registro</h1>

    <form action="" method="POST">
        @csrf 
        <input type="name" placeholder="name" id="name" name="name">
        <input type="email" placeholder="Email" id="email" name="email">
        <input type="passwoord" placeholder="Password" id="password" name="password">
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection