@extends('layouts.user')
@section('title' , 'Home')
@section('content')
 

 @foreach ( auth()->user()->facturas as $factura )


    <h1>Factura:{{$factura->id  }} {{$factura->fecha}}</h1>


              <h2>  
                Prenda
                Tipo tela
                Color
                Descripcion
                Cantidad
                Precio
            </h2>        

            
        @foreach($factura->detalle as $detalle)

              <p> {{ $detalle->prendas->nombre }} 
                {{ $detalle->prendas->tipo_tela }}
                {{ $detalle->prendas->color }}
                {{ $detalle->descripcion}} 
                {{ $detalle->cantidad }} 
                {{ $detalle->precio }} 
                </p> 
                
        @endforeach
        </tr>
        
    <hr>

@endforeach



@endsection