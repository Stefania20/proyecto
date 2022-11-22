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
  <div class="caja1">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
@endsection