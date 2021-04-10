<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// TIPO DE MEDIDOR 

Route::get('tipomedidor', 'TipomedidorController@index');
Route::get('tipomedidor/{idTipoMedidor}', 'TipomedidorController@show');
Route::post('tipomedidor', 'TipomedidorController@store');
Route::put('tipomedidor/{idTipoMedidor}', 'TipomedidorController@update');
Route::delete('tipomedidor/{idTipoMedidor}', 'TipomedidorController@delete');

//DEPARTAMENTO DEL EMPLEADO

Route::get('deptoempleado', 'DepEmpleadoController@index');
Route::get('deptoempleado/{idDepEmpleado}', 'DepEmpleadoController@show');
Route::post('deptoempleado', 'DepEmpleadoController@store');
Route::put('deptoempleado/{idDepEmpleado}', 'DepEmpleadoController@update');
Route::delete('deptoempleado/{idDepEmpleado}', 'DepEmpleadoController@delete');

//DEPARTAMENTO DEL MEDIDOR

Route::get('medidor', 'MedidorController@index');
Route::get('medidor/{idMedidor}', 'MedidorController@show');
Route::post('medidor', 'MedidorController@store');
Route::put('medidor/{idMedidor}', 'MedidorController@update');
Route::delete('medidor/{idMedidor}', 'MedidorController@delete');

//TIPO DEL CLIENTE

Route::get('tipocliente', 'TipoClienteController@index');
Route::get('tipocliente/{idTipoCliente}', 'TipoClienteController@show');
Route::post('tipocliente', 'TipoClienteController@store');
Route::put('tipocliente/{idTipoCliente}', 'TipoClienteController@update');
Route::delete('tipocliente/{idTipoCliente}', 'TipoClienteController@delete');

//CLIENTE

Route::get('cliente', 'ClienteController@index');
Route::get('cliente/{DPI}', 'ClienteController@show');
Route::post('cliente', 'ClienteController@store');
Route::put('cliente/{DPI}', 'ClienteController@update');
Route::delete('cliente/{DPI}', 'ClienteController@delete');


//FECHA

Route::get('fecha', 'FechaController@index');
Route::get('fecha/{DPI}', 'FechaController@show');
Route::post('fecha', 'FechaController@store');
Route::put('fecha/{DPI}', 'FechaController@update');
Route::delete('fecha/{DPI}', 'FechaController@delete');

//DATOS FACTURA

Route::get('factura', 'DatosFacturaController@index');
Route::get('factura/{idFactura}', 'DatosFacturaController@show');
Route::post('factura', 'DatosFacturaController@store');
Route::put('factura/{idFactura}', 'DatosFacturaController@update');
Route::delete('factura/{idFactura}', 'DatosFacturaController@delete');

//DATOS EMPLEADO

Route::get('empleado', 'EmpleadoController@index');
Route::get('empleado/{DPI}', 'EmpleadoController@show');
Route::post('empleado', 'EmpleadoController@store');
Route::put('empleado/{DPI}', 'EmpleadoController@update');
Route::delete('empleado/{DPI}', 'EmpleadoController@delete');