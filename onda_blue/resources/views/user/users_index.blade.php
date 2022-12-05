@extends('layouts.user')
@section('title' , 'Home')
@section('content')


@foreach ( auth()->user()->facturas as $factura )


<h1>Factura:{{$factura->id }} {{$factura->fecha}}</h1>
<table class='table'>
    <tr>
        <th>Prenda</th>
        <th>Tipo tela</th>
        <th>Color</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Precio</th>


    </tr>
    @php
    $total=0

    @endphp
    @foreach($factura->detalle as $detalle)
    <tr>
        <td>{{ $detalle->prendas->nombre }} </td>
        <td>{{ $detalle->prendas->tipo_tela }}</td>
        <td>{{ $detalle->prendas->color }}</td>
        <td>{{ $detalle->descripcion}} </td>
        <td>{{ $detalle->cantidad }} </td>
        <td>{{ $detalle->precio }} </td>
    </tr>
    @php
    $total=$total+($detalle->cantidad*$detalle->precio )
    @endphp
    @endforeach
</table>
Total: {{$total}}
<hr>

@endforeach

@endsection