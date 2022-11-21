@extends('layouts.app')
@section('title' , 'Home')
@section('content')

<div>
    <h1>Registro</h1>

    <form action="{{route('register.store')}}" method="POST">
        @csrf 
        <input type="text" placeholder="name" id="name" name="name">
        <input type="text" placeholder="Email" id="email" name="email">
        <input type="password" placeholder="Password" id="password" name="password">
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection