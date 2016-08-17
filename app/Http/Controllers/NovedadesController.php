<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class NovedadesController extends ClienteController
{
    //método para mostrar las Novedades
	
  public function mostrarNovedad()
    {
    	$novedades = $this->obtenerTodosLosNovedades();
    	return view('novedades.todos', ['novedades' => $novedades]);

	
}
}