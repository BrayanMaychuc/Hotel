<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\apiTuulController;

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
Route::get('blancosN', function(){
    return view('blancosN');
});



// SECCION PARA ENRUTAR APIS
Route::apiResource('apiBlancos', 'apiTuulController');