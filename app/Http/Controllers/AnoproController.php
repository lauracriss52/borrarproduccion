<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class AnoproController extends ClienteController
{
    //método para mostrar las Año produccion
	
  public function mostrarAnopro()
    {
    	$anopros = $this->obtenerTodosLosAnopros();
    	return view('anopros.todos', ['anopros' => $anopros]);

}
}
