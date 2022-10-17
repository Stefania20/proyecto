<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDetalleRequest;


class DetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("detalle.detalles_index", ["detalles"=>Detalle::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("detalle.detalles_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    public function edit(Detalle $detalle)
    {
        return view("detalle.detalles_edit", ["detalle" => $detalle,]);
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
}
