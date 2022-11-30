@extends('layouts.nav')
@section('title' , 'Detalle')
@section('content')

<div class="formulario ">
    <div id="form">
        <form  action="{{ route ( 'detalles.store' ) }} " method="POST">
        @csrf
        <div id="jiji">
            <h1>Registrar Detalle</h1>
        </div>
        <div class="mb-3">
                <label class="label" for="factura_id">Factura</label>
                <br>
                 <select name="factura_id" id="factura_id">
                    @foreach($facturas as $factura)
                    <option value="{{ $factura->id }}">{{ $factura->id}}</option>
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
                        <input name="descripcion" class="form-control"
                        type="text" placeholder="Descripcion" id="descripcion" value="{{ old('descripcion') }}">
                    </div>
                    <div class="mb-3">
                        <label class="label" for="cantidad">Cantidad</label>
                        <input name="cantidad" class="form-control"
                        type="number" placeholder="cantidad" id="cantidad" value="{{ old('cantidad') }}">
                    </div>
                    <div class="mb-3">
                        <label class="label" for="precio">Precio</label>
                        <br>
                        <input id="precio" name="precio" class="form-control"
                        type="number" placeholder="precio" value="{{old('precio')}}">      
                    </div>
                    
                    <button class="btn btn-success">Guardar</button>

        </form>            
    </div>
</div>




@endsection