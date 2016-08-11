<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class FincasController extends Controller
{
    //método para mostrar las Año produccion
	
  public function mostrarAnopros()
    {
    	$anopros = $this->obtenerTodosLosAnopros();
    	return view('anopros.todos', ['anopros' => $anopros]);

	
}
