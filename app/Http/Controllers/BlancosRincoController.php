<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlancoRinconada;
use DB;

class BlancosRincoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return $blancos=BlancoRinconada::all();
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
        $blancos= new BlancoRinconada();

        $blancos->folio=$request->get('folio');
        $blancos->elaborado_por->get('elaborado_por');
        $blancos->fecha_elaboracion->get('fecha_elaboracion');
        $blancos->descripcion->get('descripcion');
        $blancos->marca->get('marca');
        $blancos->unidad->get('unidad');
        $blancos->stock->get('stock');
        $blancos->piso->get('piso');
        $blancos->surtido->get('surtido');
        $blancos->total->get('total');
        $blancos->observaciones->get('observaciones');

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
        return $blancos=BlancoRinconada::find($id);
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
        $blancos=BlancoRinconada::find($id);

        $blancos->folio=$request->get('folio');
        $blancos->elaborado_por->get('elaborado_por');
        $blancos->fecha_elaboracion->get('fecha_elaboracion');
        $blancos->descripcion->get('descripcion');
        $blancos->marca->get('marca');
        $blancos->unidad->get('unidad');
        $blancos->stock->get('stock');
        $blancos->piso->get('piso');
        $blancos->surtido->get('surtido');
        $blancos->total->get('total');
        $blancos->observaciones->get('observaciones');

        $blancos->update();
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

        $blancos=BlancoRinconada::find($id);

        $blancos->delete();
    }
    
}
