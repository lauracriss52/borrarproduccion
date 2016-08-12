<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class NovedadesController extends Controller
{
    //método para mostrar las Año produccion
	
  public function mostrarNovedades()
    {
    	$novedades = $this->obtenerTodosLosNovedades);
    	return view('novedades.todos', ['novedades' => $novedades]);

	
}
