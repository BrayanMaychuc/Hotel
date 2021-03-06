<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salida;


class salidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $salida=salida::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salida= new salida();

        $salida->id=$request->get('id');
        $salida->producto=$request->get('producto');
        $salida->cantidad=$request->get('cantidad');
        $salida->restante=$request->get('restante');
        $salida->fecha=$request->get('fecha');
        $salida->id_encargado=$request->get('id_encargado');

        $salida->save();
        
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
