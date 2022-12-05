@extends('layouts.nav')
@section('title' , 'Home')
@section('content')
<section id=pantalla-dividida>
<div class="derecha">
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
</div>
    <div class="izquierda">
        <div class="formulario ">
            <div id="form">
                <form action="{{ route ( 'detalles.store' ) }} " method="POST">
                    @csrf
                    <div id="jiji">
                        <h1>Registrar Detalle</h1>
                    </div>
                    <div class="mb-3">
                        <label class="label" for="factura_id">Factura</label>
                        <br>
                        <select class="grandecito" name="factura_id" id="factura_id">
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
                        <input name="descripcion" class="form-control" type="text" placeholder="Descripcion" id="descripcion" value="{{ old('descripcion') }}">
                    </div>
                    <div class="mb-3">
                        <label class="label" for="cantidad">Cantidad</label>
                        <input name="cantidad" class="form-control" type="number" placeholder="cantidad" id="cantidad" value="{{ old('cantidad') }}">
                    </div>
                    <div class="mb-3">
                        <label class="label" for="precio">Precio</label>
                        <br>
                        <input id="precio" name="precio" class="form-control" type="number" placeholder="precio" value="{{old('precio')}}">
                    </div>

                    <button class="btn btn-success">Guardar</button>

                </form>
            </div>
        </div>
    </div>
    <br>
</section>    
<hr>
        <form method="GET" action="{{ url('detalles') }}">
            @csrf
            Ingrese factura <input name="factura_id" />
            <button type="submit">
                buscar
            </button>
        </form>
        @if(isset($facturaD))
        <div class="hol">
            Factura: {{ $facturaD->id }}
        </div>
        <br>
        <table class='table'>
            <tr>
                <th>Prenda</th>
                <th>Tipo tela</th>
                <th>Color</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th></th>
                <th></th>

            </tr>
            @php
            $total=0

            @endphp
            @if(isset($detalles))
            @foreach($detalles as $detalle)
            <tr>
                <td>{{ $detalle->prendas->nombre }} </td>
                <td>{{ $detalle->prendas->tipo_tela }}</td>
                <td>{{ $detalle->prendas->color }}</td>
                <td>{{ $detalle->descripcion}} </td>
                <td>{{ $detalle->cantidad }} </td>
                <td>{{ $detalle->precio }} </td>

                <td>
                    <a href="{{ route ( 'detalles.edit', $detalle->id ) }} ">
                        <button class="btn btn-outline-warning" onclick="return confirm('¿Quieres Editar?')">Editar</button>
                    </a>
                </td>
                <td>
                    <form action="{{url('detalles/'.$detalle->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                    </form>
                </td>

            </tr>
            @php
            $total=$total+($detalle->cantidad*$detalle->precio )
            @endphp
            @endforeach
            @endif
            <tr>
                <th>Total: {{$total}} </th>
            </tr>
            <div class="col-xl-12 text-right">
                  <a href="{{ route('download-pdf') }}" class="btn btn-success btn-sm">PDF</a>
              </div>
        </table>


@endif
@endsection