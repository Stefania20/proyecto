@extends("maestra")
@section("titulo", "Registrar Detalle")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route ( 'detalles.store' ) }} ">
                @csrf
                <div class="form-group">
                    <label class="label">Cantidad</label>
                    <input required autocomplete="off" name="cantidad" class="form-control"
                           type="text" placeholder="cantidad">
                    <label class="label">Precio</label>
                    <input required autocomplete="off" name="precio" class="form-control"
                           type="text" placeholder="precio">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route ('detalles.index') }}" >Volver al listado</a>
            </form>
        </div>
    </div>
@endsection