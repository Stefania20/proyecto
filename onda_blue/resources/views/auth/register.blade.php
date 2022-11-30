@extends('layouts.app')
@section('title' , 'Home')
@section('content')
<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
        <img src="{{ url('img/icono.png') }}" id="icon" alt="User Icon" />
    </div>
        <form action="{{route('register.store')}}" method="POST">
                    @csrf
                    <h1>Registro</h1>
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
                        <input type="text" placeholder="Nombre" id="name" name="name" class="fadeIn second">
                    </div>
                    @error('name')
                    <p class="alert alert-danger">{{  $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                        <input type="text" placeholder="name@ejemplo.com" id="email" name="email" class="fadeIn second">
                    </div>
                    @error('email')
                    <p class="alert alert-danger">{{  $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" placeholder="password" class="fadeIn second" id="password" name="password">
                    </div>
                    @error('password')
                    <p class="alert alert-danger">{{  $message }}</p>
                    @enderror
                    <button type="submit" class="fadeIn fourth">Registrate</button>
        </form>            
    </div>
</div>


@endsection