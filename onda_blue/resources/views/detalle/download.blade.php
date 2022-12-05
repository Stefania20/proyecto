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