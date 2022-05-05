<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blancosNuevos;

class apiTuulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $blancos=blancosNuevos::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //metodos para insertar los registros de inventarios
        $blancos = new blancosNuevos;
        $blancos->id_blancoN=$request->get('id_blancoN');
        $blancos->descripcion=$request->get('descripcion');
        $blancos->marca=$request->get('marca');
        $blancos->unidad=$request->get('unidad');
        $blancos->cantidad=$request->get('cantidad');
        $blancos->surtido=$request->get('surtido');
        $blancos->total=$request->get('total');
        $blancos->fecha_entrada=$request->get('fecha_entrada');

        $blancos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
