<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class NovedadesController extends ClienteController
{
    //método para mostrar las Novedades
	
  public function mostrarNovedades()
    {
    	$novedades = $this->obtenerTodasLasNovedades();
    	return view('novedades.todos', ['novedades' => $novedades]);	
}
    //métodos para buscar una novedad
    public function mostrarNovedad()
    {
     return view('novedades.unico');
    }
    public function obtenerNovedad(UnicoRequest $request)
    {
        $id = $request->get('id');
        $novedad = $this->obtenerUnaNovedad($id);
	
	    return view('novedades.mostrar', ['novedad' => $novedad]);
}
}