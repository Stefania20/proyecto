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
                <center><h1>Listado Prendas</h1></center>
                  <table class="table table-borderless mb-0">
                    <thead>
                      <tr>
                        
                        <th>Prenda</th>
                        <th>Nombre Prenda</th>
                        <th>Tipo de tela</th>
                        <th>Color</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($prendas as $p)
                    <tr>
                        <td>{{ $p->id}} </td>
                        <td>{{ $p->nombre}} </td>
                        <td>{{ $p->tipo_tela}} </td>
                        <td>{{ $p->color}} </td>
                        <td>
                            <a href="{{ route ( 'prendas.edit', $p->id ) }} ">
                                <button class="btn btn-outline-warning" onclick="return confirm('¿Quieres Editar?')">Editar</button>
                            </a> 
                        </td>
                            <br>
                        <td>
                            <form action="{{url('prendas/'.$p->id)}}" method="post">
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