@extends('layouts.nav')
@section('title' , 'Home')
@section('content')

<div class="formulario ">

    <div id="form">
        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div id="jiji">
            <h2 class="text-center text-black mt-4">Editar Factura</h2>
        </div>
        <form method="POST" action="{{ route('facturas.update', $factura) }} ">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="label" for="user">Usuario</label>
                <br>
                {{$user->name}}
            </div>
            <div class="mb-3">
                <label class="label" for="fecha">Fecha</label>
                <input name="fecha" class="form-control" type="date" placeholder="fecha" id="fecha" value="{{$factura->fecha}}">
            </div>
            <div class="mb-3">
                <label class="label" for="estado">Estado</label>
                <br>
                <select class="grandecito" name="estado" id="estado" value="{{$factura->estado}}">
                    <option name="estado" value="Activo">Activo</option>
                    <option name="estado" value="Inactivo">Inactivo</option>
                </select>
            </div>


            <button class="btn btn-outline-success">Guardar</button>
            <a class="btn btn-outline-primary" href="{{ route ('facturas.index') }}">Volver al listado</a>
        </form>
    </div>

</div>

@endsection