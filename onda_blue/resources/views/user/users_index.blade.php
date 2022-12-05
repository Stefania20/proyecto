@extends('layouts.app')
@section('title' , 'Home')
@section('content')

<div class="cajita">
  <div class="caja1">
    <div class="card">
      <div class="card-body">
        <center>
        <img src="{{ url('img/facturas.png') }}" alt="">
        <p class="card-text">Revisa tus facturas</p>
        <a href="{{ url('userf') }}" class="btn btn-primary">Mis Facturas</a>
        </center>
      </div>
    </div>
  </div>
  </div>
</div>


@endsection

