@extends('layouts.nav')
@section('title' , 'Detalle')
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
            <h2 class="text-center text-black mt-4">Editar Detalle</h2>
        </div>
        <form method="POST" action="{{ route('detalles.update', $detalle) }} ">

            @csrf

            @method('PUT')
            <div class="mb-3">
            <label class="label" for="factura_id">Factura</label>
            <br>
                <select class="grandecito" name="factura_id" id="factura_id">
                    @foreach($facturas as $factura)
                    <option value="{{ $factura->id }}">{{ $factura->id}} </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
            <label class="label" for="prenda_id">Prenda</label>
            <br>
                <select class="grandecito" name="prenda_id" id="prenda_id">
                    
                    @foreach($prendas as $prenda)
                    <option value="{{ $prenda->id }}">{{ $prenda->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="label" for="descripcion">Descripcion</label>
                <input name="descripcion" class="form-control" type="text" placeholder="Descripcion" id="descripcion" value="{{$detalle->descripcion}}">
            </div>
            <div class="mb-3">
                <label class="label" for="cantidad">Cantidad</label>
                <input name="cantidad" class="form-control" type="number" placeholder="cantidad" id="cantidad" value="{{$detalle->cantidad}}">
            </div>
            <div class="mb-3">
                <label class="label" for="precio">Precio</label>
                <br>
                <input id="precio" name="precio" class="form-control" type="number" placeholder="precio" value="{{$detalle->precio}}">
            </div>

            <button class="btn btn-outline-success">Guardar</button>
            <a class="btn btn-outline-primary" href="{{ route ('detalles.index') }}">Volver al listado</a>
        </form>
    </div>

</div>

@endsection