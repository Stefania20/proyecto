@extends("maestra")
@section("titulo", "Detalles")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <a href="{{route( 'detalles.create')}}" class="btn btn-success mb-2">Agregar</a>
            @include("notificacion")
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Precio</th>

                    <th>Editar</th>
                    <th>Eliminar</th></tr>
                </thead>
                <tbody>
                @foreach($detalles as $detalle)
                    <tr>
                        <td>{{$detalle->cantidad}}</td>
                        <td>{{$detalle->precio}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('detalles.edit',[$detalle])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('detalles.destroy', [$detalle])}}" method="post">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection