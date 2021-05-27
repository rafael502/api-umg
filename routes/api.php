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



//DEPARTAMENTO DEL MEDIDOR

Route::get('medidor', 'MedidorController@index');
Route::get('medidor/{idMedidor}', 'MedidorController@show');
Route::post('medidor', 'MedidorController@store');
Route::put('medidor/{idMedidor}', 'MedidorController@update');
Route::delete('medidor/{idMedidor}', 'MedidorController@delete');


//FECHA

Route::get('fecha', 'FechaController@index');
Route::get('fecha/{DPI}', 'FechaController@show');
Route::post('fecha', 'FechaController@store');
Route::put('fecha/{DPI}', 'FechaController@update');
Route::delete('fecha/{DPI}', 'FechaController@delete');


//DIRECCION DOMICILIAR
Route::get('direcciondomi', 'DireccionDomiController@index');
Route::get('direcciondomi/{idDireccionDomiciliar}', 'DireccionDomiController@show');
Route::post('direcciondomi', 'DireccionDomiController@store');
Route::put('direcciondomi/{idDireccionDomiciliar}', 'DireccionDomiController@update');
Route::delete('direcciondomi/{idDireccionDomiciliar}', 'DireccionDomiController@delete');








//----------------------------------------
//MUNICIPIO

Route::get('municipio', 'MunicipioController@index');
Route::get('municipio/{id}', 'MunicipioController@show');
Route::post('municipio', 'MunicipioController@store');
Route::put('municipio/{id}', 'MunicipioController@update');
Route::delete('municipio/{id}', 'MunicipioController@delete');
Route::post('municipio', 'MunicipioController@getMunicipios');


//DEPARTAMENTO

Route::get('departamento', 'DepartamentoController@index');
Route::get('departamento/{id}', 'DepartamentoController@show');
Route::post('departamento', 'DepartamentoController@store');
Route::put('departamento/{id}', 'DepartamentoController@update');
Route::delete('departamento/{id}', 'DepartamentoController@delete');

//DATOS EMPLEADO

Route::get('empleado', 'EmpleadoController@index');
Route::get('empleado/{id}', 'EmpleadoController@show');
Route::post('empleado', 'EmpleadoController@store');
Route::put('empleado/{id}', 'EmpleadoController@update');
Route::delete('empleado/{id}', 'EmpleadoController@delete');


//DEPARTAMENTO DEL EMPLEADO

Route::get('deptoempleado', 'DepEmpleadoController@index');
Route::get('deptoempleado/{id}', 'DepEmpleadoController@show');
Route::post('deptoempleado', 'DepEmpleadoController@store');
Route::put('deptoempleado/{id}', 'DepEmpleadoController@update');
Route::delete('deptoempleado/{id}', 'DepEmpleadoController@delete');

// TIPO DE MEDIDOR

Route::get('tipomedidor', 'TipomedidorController@index');
Route::get('tipomedidor/{id}', 'TipomedidorController@show');
Route::post('tipomedidor', 'TipomedidorController@store');
Route::put('tipomedidor/{id}', 'TipomedidorController@update');
Route::delete('tipomedidor/{id}', 'TipomedidorController@delete');



//TIPO DEL CLIENTE

Route::get('tipocliente', 'TipoClienteController@index');
Route::get('tipocliente/{id}', 'TipoClienteController@show');
Route::post('tipocliente', 'TipoClienteController@store');
Route::put('tipocliente/{id}', 'TipoClienteController@update');
Route::delete('tipocliente/{id}', 'TipoClienteController@delete');

//CLIENTE

Route::get('cliente', 'ClienteController@index');
Route::get('cliente/{id}', 'ClienteController@show');
Route::post('cliente', 'ClienteController@store');
Route::put('cliente/{id}', 'ClienteController@update');
Route::delete('cliente/{id}', 'ClienteController@delete');


//DATOS FACTURA

Route::get('factura', 'DatosFacturaController@index');
Route::get('factura/{id}', 'DatosFacturaController@show');
Route::post('factura', 'DatosFacturaController@store');
Route::put('factura/{id}', 'DatosFacturaController@update');
Route::delete('factura/{id}', 'DatosFacturaController@delete');

//RUTAS EMPLEADO FACTURAR

Route::get('rutasempleado', 'RutasEmpleadoFacturarController@index');
Route::get('rutasempleado/{id}', 'RutasEmpleadoFacturarController@show');
Route::post('rutasempleado', 'RutasEmpleadoFacturarController@store');
Route::put('rutasempleado/{id}', 'RutasEmpleadoFacturarController@update');
Route::delete('rutasempleado/{id}', 'RutasEmpleadoFacturarController@delete');

//RUTAS CONTADOR

Route::get('rutascontador', 'RutasContadorController@index');
Route::get('rutascontador/{id}', 'RutasContadorController@show');
Route::post('rutascontador', 'RutasContadorController@store');
Route::put('rutascontador/{id}', 'RutasContadorController@update');
Route::delete('rutascontador/{id}', 'RutasContadorController@delete');

//RUTAS CONTADOR

Route::get('medidor', 'MedidorController@index');
Route::get('medidor/{id}', 'MedidorController@show');
Route::post('medidor', 'MedidorController@store');
Route::put('medidor/{id}', 'MedidorController@update');
Route::delete('medidor/{id}', 'MedidorController@delete');

//CLIENTE MEDIDOR

Route::get('clientemedidor', 'ClienteMedidorController@index');
Route::get('clientemedidor/{id}', 'ClienteMedidorController@show');
Route::post('clientemedidor', 'ClienteMedidorController@store');
Route::put('clientemedidor/{id}', 'ClienteMedidorController@update');
Route::delete('clientemedidor/{id}', 'ClienteMedidorController@delete');


//LOGIN

Route::get('login', 'LoginUsuarioController@index');
Route::get('login/{id}', 'LoginUsuarioController@show');
Route::post('login', 'LoginUsuarioController@store');
Route::put('login/{id}', 'LoginUsuarioController@update');
Route::delete('login/{id}', 'LoginUsuarioController@delete');
