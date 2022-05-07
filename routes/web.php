<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\apiTuulController;
use Illuminate\Http\Controllers\BlancosTuul;
use Illuminate\Http\Controllers\DatosEncargadoController;
use App\Http\Controllers\InsumosTuulController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function(){
    return view('index');
});
Route::get('tuul', function(){
    return view('tuul');
});

Route::get('rinconada', function(){
    return view('rinconada');
});
Route::get('villa', function(){
    return view('villa');
});
Route::get('Form', function(){
    return view('formularios.form_InventarioN');
});
// RUTAS PARA TABLAS
Route::get('blancosN', function(){
    return view('blancosN');
});

Route::get('inventarioBlancosT', function(){
    return view('formularios.tablaInventariotuul');
});
Route::get('inventarioCubiertosT', function(){
    return view('formularios.tabla_cubiertosTuul');
});


// SECCION DEL HOTEL TUUL
Route::get('insumosT', function(){
    return view('insumosTuul');
});

// SECCION PARA ENRUTAR APIS

                // HOTEL TUUL
Route::apiResource('apiBlancos', 'apiTuulController');
Route::apiResource('BlancosTuul', 'BlancosTuulController');
Route::apiResource('Datos', 'DatosEncargadoController');
Route::apiResource('cubiertosTuul', 'CubiertosTuulController');
Route::apiResource('insumos', 'InsumosTuulController');