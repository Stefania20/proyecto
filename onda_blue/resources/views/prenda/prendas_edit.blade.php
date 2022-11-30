@extends('layouts.nav')
@section('title' , 'Home')
@section('content')

<div class="formulario ">
        
      
    
        <div id="form">
        @if(count($errors)>0)
        <div class="alert alert-danger" role ="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div id="jiji" >
            <h2 class="text-center text-black mt-4">Editar Prenda</h2>
        </div>
            <form method="POST" action="{{ route('prendas.update', $prenda) }} ">
                
            @csrf

            @method('PUT')

            <div class="mb-3">
                    <label class="label">Nombre</label>
                    <input name="nombre" class="form-control"
                           type="text" placeholder="nombre"required value="{{ isset($prenda-> nombre)?$prenda-> nombre: '' }}"  >
            </div>
            <div class="mb-3">
            <select class="form-select" aria-label="Default select example" id="tipo_tela" name="tipo_tela" value="{{$prenda->tipo_tela}}">
                        <option selected>Tela</option>
                        <option value="Gamusa">Gamusa</option>
                        <option value="Lino">Lino</option>
                        <option value="Lana">Lana</option>
                        <option value="Algodon">Algodon</option>
                        <option value="Seda">Seda</option>
                        <option value="Piel">Piel</option>

                    </select> 
            </div>
            <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" id="color" name="color" value="{{$prenda->color}}">
                        <option selected>Color</option>
                        <option value="Azul">Azul</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Verde">Verde</option>
                        <option value="Rosa">Rosa</option>
                        <option value="Cafe">Cafe</option>
                        <option value="Negro">Negro</option>
                    </select>
            </div>
                <button class="btn btn-outline-success">Guardar</button>
                <a class="btn btn-outline-primary" href="{{ route ('prendas.index') }}" >Volver al listado</a>
            </form>
        </div>
    
</div>

@endsection