<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cubiertosTuul;

class cubiertosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $cubiertos=cubiertosTuul::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cubiertos = new cubiertosTuul();
        $cubiertos->id_cubierto=$request->get('id_cubierto');
        $cubiertos->nombre=$request->get('nombre');
        $cubiertos->existencia=$request->get('existencia');
        $cubiertos->total=$request->get('total');
        $cubiertos->observacion=$request->get('observacion');
        $cubiertos->save();     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return cubiertosTuul::find($id);
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
        $cubiertos = cubiertosTuul::find($id);

        $cubiertos->id_cubierto=$request->get('id_cubierto');
        $cubiertos->nombre=$request->get('nombre');
        $cubiertos->existencia=$request->get('existencia');
        $cubiertos->total=$request->get('total');
        $cubiertos->observacion=$request->get('observacion');

        $cubiertos->update(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cubiertos = cubiertosTuul::find($id);
        $cubiertos ->delete($id);
    }
}
