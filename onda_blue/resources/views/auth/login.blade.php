@extends('layouts.app')
@section('title' , 'Home')
@section('content')

<div>
    <br>
    <h1>Login</h1>

    <form action="" method="POST">
        @csrf
        <input type="email" placeholder="Email" id="email" name="email">
        <input type="password" placeholder="Password" id="password" name="password">
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection