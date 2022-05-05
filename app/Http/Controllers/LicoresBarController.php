<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LicoresBar;
use DB;

class LicoresBarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $licores=LicoresBar::all();
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
        $licores= new CubiertosVilla();

        $licores->folio=$request->get('folio');
        $licores->elaborado_por->get('elaborado_por');
        $licores->fecha_elaboracion->get('fecha_elaboracion');
        $licores->descripcion->get('descripcion');
        $licores->existencia->get('existencia');
        $licores->total->get('total');
        $licores->surtir>get('surtir');
        $licores->observaciones->get('observaciones');

        $licores->save();
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
        return $licores=LicoresBar::find($id);
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
        $licores= new CubiertosVilla();

        $licores->folio=$request->get('folio');
        $licores->elaborado_por->get('elaborado_por');
        $licores->fecha_elaboracion->get('fecha_elaboracion');
        $licores->descripcion->get('descripcion');
        $licores->existencia->get('existencia');
        $licores->total->get('total');
        $licores->surtir>get('surtir');
        $licores->observaciones->get('observaciones');

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
        $cubiertos=LicoresBar::find($id);

        $cubiertos->delete();
    }
}
