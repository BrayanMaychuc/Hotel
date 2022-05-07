<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CubiertosTuul;
use DB;

class CubiertosTuulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $cubiertos=CubiertosTuul::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cubiertos= new CubiertosTuul();

        $cubiertos->id_tuul=$request->get('id_tuul');
        $cubiertos->descripcion=$request->get('descripcion');
        $cubiertos->existencia=$request->get('existencia');
        $cubiertos->total=$request->get('total');
        $cubiertos->status=$request->get('status');
        $cubiertos->observacion=$request->get('observacion');
        $cubiertos->fecha_elaboracion=$request->get('fecha_elaboracion');

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
        //
        return $cubiertos=CubiertosRestaurante::find($id);
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
        $cubiertos=CubiertosTuul::find($id);

        $cubiertos->id_tuul=$request->get('id_tuul');
        $cubiertos->descripcion=$request->get('descripcion');
        $cubiertos->existencia=$request->get('existencia');
        $cubiertos->total=$request->get('total');
        $cubiertos->status=$request->get('status');
        $cubiertos->observacion=$request->get('observacion');
        $cubiertos->fecha_elaboracion=$request->get('fecha_elaboracion');

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
        //
        $cubiertos=CubiertosTuul::find($id);

        $cubiertos->delete();
    }
}
