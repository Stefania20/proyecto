<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFacturaRequest;
use App\Models\User;



class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("factura.facturas_index", ["facturas"=>Factura::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccionar usuarios
        $users= User::all();

        
        return view("factura.facturas_create")->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura($request->except("_token"));
        $factura = new Factura($request->input());
        $factura->saveOrFail();
        return redirect()->route("detalles.index")->with(["mensaje" => "Factura creada",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          //seleccionar usuarios
         // $users= User::all();
          //seleccionar prendas
          //$pagos= Pago::all();
          //$factura->pago->update(......)
        $Factura = Factura::find($id);
        $user = User::find($Factura->user_id);
        return view("factura.facturas_edit", ["factura"=>$Factura,"user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        $factura->fill($request->input())->saveOrFail();
        return redirect()->route("facturas.index")->with(["mensaje" => "Factura actualizada"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return redirect()->route("facturas.index")->with(["mensaje" => "Factura eliminada",
        ]);
    }
}
