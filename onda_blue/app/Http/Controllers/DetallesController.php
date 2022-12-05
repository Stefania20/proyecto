<?php

namespace App\Http\Controllers;

use App\Models\Detalle;

//use PDF;
use Barryvdh\DomPDF\Facade;
use PDF;
use Illuminate\Http\Request;

use App\Http\Requests\StoreDetalleRequest;


use App\Models\Factura;
use App\Models\Prenda;
use App\Models\User;




class DetallesController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //seleccionar facturas
        $facturas = Factura::all();

        //seleccionar prendas
        $prendas = Prenda::all();

        // seleccionar usuarios
        $users= User::all();
        
 
        //var_dump($request->factura_id);
        if (!$request->factura_id) {
            return view("detalle.detalles_index")->with('facturas', $facturas)->with('prendas', $prendas)->with('users',$users);
        } else {
            $factura_id = $request->factura_id;
            $factura = Factura::find($factura_id);
            $detalles = $factura->detalle;
            return view("detalle.detalles_index")->with('facturaD', $factura)->with('detalles', $detalles)->with('facturas', $facturas)->with('prendas', $prendas)->with('users',$users);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //seleccionar facturas
         $facturas= Factura::all();

         //seleccionar prendas
         $prendas= Prenda::all();
        return view("detalle.detalles_create")->with('facturas',$facturas)->with('prendas',$prendas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = new Detalle($request->except("_token"));
        $detalle = new Detalle($request->input());
        $detalle->saveOrFail();
        return redirect()->route("detalles.index")->with(["mensaje" => "Detalle creado",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle $detalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("detalle.detalles_edit", ["detalle" => Detalle::find($id), 'facturas' => Factura::all(), 'prendas' => Prenda::all()]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalle $detalle)
    {
        $detalle->fill($request->input())->saveOrFail();
        return redirect()->route("detalles.index")->with(["mensaje" => "Detalle actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalle $detalle)
    {
        $detalle->delete();
        return redirect()->route("detalles.index")->with(["mensaje" => "Detalle eliminado",
        ]);
    }

    public function downloadPdf()
    {
        $detalle = Detalle::all();

       view()->share('detalle.download',$detalle);

        $pdf = PDF::loadView('detalle.download', ['detalle' => $detalle]);

        return $pdf->download('Facturas.pdf');
    }
}
