<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class SueloController extends Controller
{
    //método para mostrar las Productos
	
	public function mostrarSuelo()
	{
		$usuariocliente = $this->ListarTodosLosSuelos();
		return view('suelo.todos', ['suelo' => $suelo]);
	}
}