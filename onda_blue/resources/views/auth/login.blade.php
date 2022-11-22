@extends('layouts.app')
@section('title' , 'Home')
@section('content')

<div class="ex-form-1 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="text-box mt-5 mb-5">
                    <form action="" method="POST">
                    @csrf
                    <h1>Login</h1>
                    <div class="mb-4 form-floating">
                        <input type="email" placeholder="name@ejemplo.com" id="email" name="email">
                        <label for="floatingInput">Correo Electronico</label>
                    </div>
                    <div class="mb-4 form-floating">
                        <input type="password" placeholder="contraseña" id="password" name="password">
                        <label for="floatingInput">Correo Electronico</label>
                    </div>
                    @error('message')
                    <p class="red-text text-darken-2">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="form-control-submit-button">Ingresar</button>
                    </form>
                </div> 
            </div> 
        </div> 
    </div> 
 </div>
@endsection