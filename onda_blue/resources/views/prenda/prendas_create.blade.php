@extends('layouts.nav')
@section('title' , 'Home')
@section('content')

<div class="formulario ">
    <div id="form">
        <form  action="{{ route ( 'prendas.store' ) }} " method="POST">
        @csrf
        <div id="jiji">
            <h1>Registrar Una Prenda</h1>
        </div>
                    <div class="mb-3">
                        <label class="label" for="nombre">Nombre</label>
                        <input name="nombre" class="form-control"
                        type="text" placeholder="Nombre Prenda" id="nombre" value="{{ old('nombre') }}">
                    </div>
                    <div class="mb-3">
                    <label class="label" for="tipo_tela">Tipo Tela</label>
                    <select class="form-select" aria-label="Default select example" id="tipo_tela" name="tipo_tela" value="{{old('tipo_tela')}}">
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
                    <label class="label" for="color">Color</label>
                    <select class="form-select" aria-label="Default select example" id="color" name="color" value="{{old('color')}}">
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

        </form>            
    </div>
</div>




@endsection