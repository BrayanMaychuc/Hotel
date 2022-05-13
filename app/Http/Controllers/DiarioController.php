<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventarioDiario;

class DiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $diarios=InventarioDiario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diarios = new InventarioDiario();

        $diarios->folio=$request->get('folio');
        $diarios->lugar=$request->get('lugar');
        $diarios->producto = $request->get('producto');
        $diarios->unidad = $request->get('unidad');
        $diarios->cantidad = $request->get('cantidad');
        
        $diarios->update();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diarios=InventarioDiario::find($id);
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
        $diarios=InventarioDiario::find($id);

        $diarios->folio=$request->get('folio');
        $diarios->lugar=$request->get('lugar');
        $diarios->producto=$request->get('producto');
        $diarios->unidad=$request->get('unidad');
        $diarios->cantidad=$request->get('cantidad');
        
        $diarios->update();
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
