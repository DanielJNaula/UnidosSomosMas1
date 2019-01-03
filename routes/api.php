<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/cifras-nacionales/pib-actividad-economica/{tipo_cifra_id}/{anio}','CnCifrasNacionalesController@obtenerPibActividadEconomica');

Route::get('/cifras-nacionales/pib-zona/{tipo_cifra_id}/{anio}','CnCifrasNacionalesController@obtenerPibZona');

Route::get('/cifras-nacionales/pib-zona/{tipo_cifra_id}','CnCifrasNacionalesController@obtenerPibPorZona');

Route::get('/cifras-nacionales/pib-provincia/{tipo_cifra_id}/{anio}','CnCifrasNacionalesController@obtenerPibProvincia');