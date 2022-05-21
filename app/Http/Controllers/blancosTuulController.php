<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\inventarioBlancosTuul;

class blancosTuulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $inventarios=inventarioBlancosTuul::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventarios= new inventarioBlancosTuul();

        $inventarios->id_blanco=$request->get('id_blanco');        
        $inventarios->descripcion=$request->get('descripcion');        
        $inventarios->marca=$request->get('marca');
        $inventarios->unidad=$request->get('unidad');
        $inventarios->stock=$request->get('stock');
        $inventarios->piso=$request->get('piso');
        $inventarios->surtido=$request->get('surtido');
        $inventarios->total=$request->get('total');
        $inventarios->observaciones=$request->get('observaciones');

        $inventarios->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $inventarios = inventarioBlancosTuul::find($id);
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
        $inventarios = inventarioBlancosTuul::find($id);

        $inventarios->id_blanco=$request->get('id_blanco');        
        $inventarios->descripcion=$request->get('descripcion');        
        $inventarios->marca=$request->get('marca');
        $inventarios->unidad=$request->get('unidad');
        $inventarios->stock=$request->get('stock');
        $inventarios->piso=$request->get('piso');
        $inventarios->surtido=$request->get('surtido');
        $inventarios->total=$request->get('total');
        $inventarios->observaciones=$request->get('observaciones');

        $inventarios->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventarios=inventarioBlancosTuul::find($id);
        $inventarios->delete($id);
    }
}
