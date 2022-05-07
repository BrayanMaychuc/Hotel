<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsumosTuul;

class InsumosTuulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $insumos = InsumosTuul::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insumos= new InsumosTuul;

        $insumos->id_insumo=$request->get('id_insumo');
        $insumos->nombre=$request->get('nombre');
        $insumos->unidad=$request->get('cantidad');
        $insumos->cantidad=$request->get('cantidad');

        $insumos->save();
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
