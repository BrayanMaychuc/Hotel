<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\DiarioController;
// use Illuminate\Http\Controllers\BlancosTuul;
// use Illuminate\Http\Controllers\DatosEncargadoController;
// use App\Http\Controllers\InsumosTuulController;
// use App\Http\Controllers\InventariosTuulController;
// use App\Http\Controllers\pdfInventarioController;

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
        // APIS TUUL
Route::apiResource('diario','DiarioController');

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

        // Route::get('inventarioBlancosT', function(){
            //     return view('formularios.tablaInventariotuul');
            // });


// SECCION DEL HOTEL TUUL
Route::view('nuevo', 'tablas_nuevas.inventario_diario' );

Route::get('insumosT', function(){
    return view('hotelTuul.insumosTuul');
});
Route::get('tuul', function(){
    return view('hotelTuul.tuul');
});

        // Route::get('inventarioCubiertosT', function(){
        //     return view('formularios.tabla_cubiertosTuul');
        // });
        // Route::view('tablaBlancos', 'formularios.tablaBlancosN');

// SECCION PARA ENRUTAR APIS

                // HOTEL TUUL



            // RUTAS DE FPDF
Route::get('inventario', 'pdfInventarioController@inventarios');