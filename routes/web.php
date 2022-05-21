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

Route::apiResource('blanco', 'blancosController');

Route::apiResource('cubierto', 'cubiertosController');

Route::apiResource('blancoT', 'blancosTuulController');

Route::apiResource('encargado', 'encargadoController');

Route::apiResource('sali', 'salidasController');

        // FIN DE SECCION DE APIS TUUL



// SECCION DEL HOTEL TUUL
Route::view('diariosT', 'tablas_nuevas.inventario_diario' );
Route::view('blancosN', 'tablas_nuevas.blanco_nuevo');
Route::view('cubiertos','tablas_nuevas.inventario_cubiertos');
Route::view('blancos','tablas_nuevas.inventario_blancos');
Route::view('salida', 'salidas');


        // Route::get('inventarioCubiertosT', function(){
        //     return view('formularios.tabla_cubiertosTuul');
        // });
        // Route::view('tablaBlancos', 'formularios.tablaBlancosN');

// SECCION PARA ENRUTAR APIS

                // HOTEL TUUL



            // RUTAS DE FPDF
Route::get('inventario', 'pdfInventarioController@inventarios');