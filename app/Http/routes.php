<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () 
{
    return view('principal');
});


//-----estudiante controller-----------------------------------------------------------------------------

Route::get('/prueba', 'Controller@obtenerAccessToken');
Route::get('/cosechas', 'CosechasController@mostrarCosechas');
//buscar estudiante por id
Route::get('/cosechas/unico', 'CosechasController@mostrarCosecha');
Route::post('/cosechas/unico', 'CosechasController@obtenerCosecha');
//Nuevo estudiante
Route::post('/cosechas/agregar', 'CosechasController@crearCosecha');
Route::get('/cosechas/agregar', 'CosechasController@agregarCosecha');
//Actualizar estudiante
Route::put('/cosechas/actualizar', 'CosechasController@actualizarCosecha');
Route::post('/cosechas/actualizar', 'CosechasController@editarCosecha');
Route::get('/cosechas/actualizar', 'CosechasController@elegirCosecha');
//Eliminar estudiante
Route::post('/cosechas/eliminar', 'CosechasController@eliminarCosecha');
Route::get('/cosechas/eliminar', 'CosechasController@seleccionarCosecha');

//-----siembra controller-----------------------------------------------------------------------------

Route::get('/siembras', 'SiembrasController@mostrarSiembras');
Route::post('/siembras/unico', 'SiembrasController@obtenerSiembra');
Route::get('/siembras/unico', 'SiembrasController@mostrarSiembra');
//agregar una siembra
Route::post('/personas/siembras/agregar', 'PersonaSiembrasController@crearSiembra');
Route::get('/personas/siembras/agregar', 'PersonaSiembrasController@agregarSiembra');
//eliminar siembras
Route::get('/personas/siembras/eliminar', 'PersonaSiembrasController@seleccionarSiembra');
Route::post('/personas/siembras/eliminar', 'PersonaSiembrasController@eliminarSiembra');

//Editar siembras
Route::put('/personas/siembras/actualizar', 'PersonaSiembrasController@actualizarSiembra');
Route::post('/personas/siembras/actualizar', 'PersonaSiembrasController@editarSiembra');
Route::get('/personas/siembras/actualizar', 'PersonaSiembrasController@elegirSiembra');

//-----siembracosechas controller------------------------------------------------------------------

Route::post('/siembras/cosechas', 'SiembraCosechasController@mostrarCosechadeunasiembra');
Route::get('/siembras/cosechas', 'SiembraCosechasController@mostrarSiembras');
Route::get('/siembras/cosechas/rendimiento', 'SiembraCosechasController@mostrarrendimientoSiembras');

//Agregar cosechas a un siembra
Route::post('/siembras/cosechas/agregar', 'SiembraCosechasController@agregarCosechaSiembra');
Route::get('/siembras/cosechas/agregar', 'SiembraCosechasController@formularioagregarCosechasSiembras');
//Eliminar cosechas agregados a un siembra
Route::delete('/siembras/cosechas/eliminar', 'SiembraCosechasController@eliminarCosechaSiembra');
Route::post('/siembras/cosechas/eliminar', 'SiembraCosechasController@seleccionarCosechaSiembra');
Route::get('/siembras/cosechas/eliminar', 'SiembraCosechasController@seleccionarSiembra');

//------ Personasiembras controller-------------------------------------------------------------------
Route::post('/personas/siembras', 'PersonaSiembrasController@mostrarSiembrasPersona');
Route::get('/personas/siembras', 'PersonaSiembrasController@mostrarPersonas');

Route::get('/personas', 'PersonasController@mostrarPersonas');
Route::post('/personas/unico', 'PersonasController@obtenerPersona');
Route::get('/personas/unico', 'PersonasController@mostrarPersona');

Route::post('/personas/agregar', 'PersonasController@crearPersona');
Route::get('/personas/agregar', 'PersonasController@agregarPersona');

Route::put('/personas/actualizar', 'PersonasController@actualizarPersona');
Route::post('/personas/actualizar', 'PersonasController@editarPersona');
Route::get('/personas/actualizar', 'PersonasController@elegirPersona');

Route::post('/personas/eliminar', 'PersonasController@eliminarPersona');
Route::get('/personas/eliminar', 'PersonasController@seleccionarPersona');

//-----Productos controller-----------------------------------------------------------------------------
Route::get('/fincas/', 'FincasController@mostrarFincas');
//buscar estudiante por id
Route::get('/fincas/unico', 'FincasController@mostrarFinca');
Route::post('/fincas/unico', 'FincasController@obtenerFinca');
//Nuevo estudiante
Route::post('/fincas/agregar', 'FincasController@crearFinca');
Route::get('/fincas/agregar', 'FincasController@agregarFinca');
//Actualizar estudiante
Route::put('/fincas/actualizar', 'FincasController@actualizarFinca');
Route::post('/fincas/actualizar', 'FincasController@editarFinca');
Route::get('/fincas/actualizar', 'FincasController@elegirFinca');
//Eliminar estudiante
Route::post('/fincas/eliminar', 'FincasController@eliminarFinca');
Route::get('/fincas/eliminar', 'FincasController@seleccionarFinca');

//-----------------------------------------------------------------------------------------------------------
 // procedimientos productos
Route::get('/productos/', 'ProductosController@mostrarProductos');
Route::post('/productos/unico', 'ProductosController@obtenerProducto');
Route::get('/productos/unico', 'ProductosController@mostrarProducto');

Route::post('/productos/agregar', 'ProductosController@crearProducto');
Route::get('/productos/agregar', 'ProductosController@agregarProducto');

Route::put('/productos/actualizar', 'ProductosController@actualizarProducto');
Route::post('/productos/actualizar', 'ProductosController@editarProducto');
Route::get('/productos/actualizar', 'ProductosController@elegirProducto');

Route::post('/productos/eliminar', 'ProductosController@eliminarProducto');
Route::get('/productos/eliminar', 'ProductosController@seleccionarProducto');

 // procedimiento listar usuarioscliente
Route::get('/usuariocliente/', 'UsuarioClienteController@mostrarUsuarioCliente');
 //procedimeonto listar suelo
Route::get('/suelo/', 'SueloController@mostrarSuelo');

//-----novedades controller-----------------------------------------------------------------------------
Route::get('/novedades/', 'NovedadesController@mostrarNovedades');


Route::get('/novedades/unico', 'NovedadesController@mostrarNovedad');
Route::post('/novedades/unico', 'NovedadesController@obtenerNovedad');

Route::post('/producto/{idproducto}/novedad/agregar', 'NovedadesProductosController@crearNovedad');
Route::get('/producto/{idproducto}/novedad/agregar', 'NovedadesProductosController@agregarNovedad');

Route::put('/producto/{idproducto}/novedad/actualizar', 'NovedadesProductosController@actualizarNovedad');
Route::post('/producto/{idproducto}/novedad/actualizar', 'NovedadesProductosController@editarNovedad');
Route::get('/producto/{idproducto}/novedad/actualizar', 'NovedadesProductosController@elegirNovedad');

Route::post('/producto/novedad/eliminar', 'NovedadesProductosController@eliminarNovedad');
Route::get('/producto/novedad/eliminar', 'NovedadesProductosController@seleccionarNovedad');

//-----anopro controller-----------------------------------------------------------------------------
Route::get('/renanos/', 'RenanosController@mostrarRenanos');
//buscar renanos por id
Route::get('/renanos/unico', 'RenanosController@mostrarRenano');
Route::post('/renanos/unico', 'RenanosController@obtenerRenano');
//Agregar renano
Route::post('/siembra/{idsiembra}/renano/agregar', 'RenanosSiembraController@crearRenanos');
Route::get('/siembra/{idsiembra}/renano/agregar', 'RenanosSiembraController@agregarRenano');
//Actualizar renano
Route::put('/siembra/{idsiembra}/renano/actualizar', 'RenanosSiembraController@actualizarRenano');
Route::post('/siembra/{idsiembra}/renano/actualizar', 'RenanosSiembraController@editarRenanos');
Route::get('/siembra/{idsiembra}/renano/actualizar', 'RenanosSiembraController@elegirRenano');
//Eliminar renano
Route::post('/siembra/renano/eliminar', 'RenanosSiembraController@eliminarRenanos');
Route::get('/siembra/renano/eliminar', 'RenanosSiembraController@seleccionarRenanos');

