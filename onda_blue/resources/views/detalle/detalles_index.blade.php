<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
                    <label class="label">Id Factura</label>
                    <input required autocomplete="off" name="factura_id" class="form-control"
                           type="text" placeholder="factura">
                    <label class="label">Id Prenda</label>
                    <input required autocomplete="off" name="prenda_id" class="form-control"
                           type="text" placeholder="prenda">
                    
                </div>

                
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route ('detalles.index') }}" >Volver al listado</a>
            </form>
        </div>
    </div>

    
</body>
</html>