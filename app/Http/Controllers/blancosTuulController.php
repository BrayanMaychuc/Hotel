<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlancoTuul;
use DB;

class BlancosTuulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $blancos=BlancoTuul::all();
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
        $blancos= new BlancoTuul;
        
        $blancos->id_blancos3=$request->get('id_blanco3');
        $blancos->descripcion=$request->get('descripcion');
        $blancos->marca=$request->get('marca');
        $blancos->unidad=$request->get('unidad');
        $blancos->stock=$request->get('stock');
        $blancos->piso=$request->get('piso');
        $blancos->surtido=$request->get('surtido');
        $blancos->total=$request->get('total');
        $blancos->observaciones=$request->get('observaciones');
        
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
        return BlancoTuul::find($id);
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
        $blancos=BlancoTuul::find($id);

        $blancos->id_blancos3=$request->get('id_blancos3');
        $blancos->descripcion=$request->get('descripcion');
        $blancos->marca=$request->get('marca');
        $blancos->unidad=$request->get('unidad');
        $blancos->stock=$request->get('stock');
        $blancos->piso=$request->get('piso');
        $blancos->surtido=$request->get('surtido');
        $blancos->total=$request->get('total');
        $blancos->observaciones=$request->get('observaciones');

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
        $blancos=BlancoTuul::find($id);

        $blancos->delete();
    }
}
