@extends('layouts.nav')
@section('title' , 'Factura')
@section('content')

<div class="formulario ">
    <div id="form">
        <form  action="{{ route ( 'facturas.store' ) }} " method="POST">
        @csrf
        <div id="jiji">
            <h1>Registrar Factura</h1>
        </div>
        <div class="mb-3">
                <label class="label" for="user">Usuario</label>
                <br>
                 <select class="grandecito" name="user_id" id="user_id" >
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name}}</option>
                    @endforeach
                   </select>
        </div>
      
                    <div class="mb-3">
                        <label class="label" for="fecha">Fecha</label>
                        <input name="fecha" class="form-control"
                        type="date" placeholder="fecha" id="fecha" value="{{ old('fecha') }}">
                    </div>
                    <div class="mb-3">
                        <label class="label" for="estado">Estado</label>
                        <br>
                        <select class="grandecito" name="estado" id="estado" value="{{ old('estado') }}">
                            <option name="estado" value="Activo">Activo</option>
                            <option name="estado" value="Inactivo">Inactivo</option>
                        </select>      
                    </div>
                    
                    <button class="btn btn-success">Guardar</button>

        </form>            
    </div>
</div>




@endsection