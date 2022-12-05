@extends('layouts.nav')
@section('title' , 'Home')
@section('content')

    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
              <div class="card-body">
                <div class="table-responsive">
                <center><h1>Listado Facturas</h1></center>
                  <table class="table table-borderless mb-0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($facturas as $f)
                    <tr>
                        <td>{{ $f->id}} </td>
                        <td>{{ $f->user->name}} </td>
                        <td>{{ $f->fecha}} </td>
                        <td>{{ $f->estado}} </td>
                        <td>
                            <a href="{{ route ( 'facturas.edit', $f->id) }} ">
                                <button class="btn btn-outline-warning" onclick="return confirm('¿Quieres Editar?')">Editar</button>
                            </a> 
                        </td>
                            <br>
                        <td>
                            <form action="{{url('facturas/'.$f->id)}}" method="post">
                            @csrf
                                {{method_field('DELETE')}}
                                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                            </form>
                        </td>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

@endsection