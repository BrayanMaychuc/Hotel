<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CubiertosBar;
use DB;

class CubiertosBarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $cubiertos=CubiertosBar::all();
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
        $cubiertos= new CubiertosBar();

        $cubiertos->folio=$request->get('folio');
        $cubiertos->elaborado_por->get('elaborado_por');
        $cubiertos->fecha_elaboracion->get('fecha_elaboracion');
        $cubiertos->descripcion->get('descripcion');
        $cubiertos->existencia->get('existencia');
        $cubiertos->total->get('total');
        $cubiertos->de_baja->get('de_baja');
        $cubiertos->observaciones->get('observaciones');

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
        
        return $blancos=CubiertosBar::find($id);
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
        $cubiertos=CubiertosBar::find($id);

        $cubiertos->folio=$request->get('folio');
        $cubiertos->elaborado_por->get('elaborado_por');
        $cubiertos->fecha_elaboracion->get('fecha_elaboracion');
        $cubiertos->descripcion->get('descripcion');
        $cubiertos->existencia->get('existencia');
        $cubiertos->total->get('total');
        $cubiertos->de_baja->get('de_baja');
        $cubiertos->observaciones->get('observaciones');

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
        $cubiertos=CubiertosBar::find($id);

        $cubiertos->delete();
    }
}
