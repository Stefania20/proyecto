@extends("maestra")
@section("titulo", "Editar detalle")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('detalles.update', [$detalle])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Cantidad</label>
                    <input required value="{{$detalle->cantidad}}" autocomplete="off" name="cantidad" class="form-control"
                           type="text" placeholder="Cantidad">
                    <label class="label">Precio</label>
                    <input required value="{{$detalle->precio}}" autocomplete="off" name="precio" class="form-control"
                           type="text" placeholder="Precio">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route('detalles.index')}}">Volver</a>
            </form>
        </div>
    </div>
@endsection