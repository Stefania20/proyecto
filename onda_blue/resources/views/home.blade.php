@extends('layouts.app')
@section('title' , 'Home')
@section('content')
<div class="cajita">
  <div class="caja1">
    <div class="card">
      <div class="card-body">
        <center>
        <img src="{{ url('img/factura.png') }}" alt="">
        <p class="card-text">Ingresar Una Nueva Factura</p>
        <a href="{{ url('facturas/create') }}" class="btn btn-primary">Facturar</a>
        </center>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection