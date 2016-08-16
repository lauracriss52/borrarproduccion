<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class SueloController extends ClienteController
{
    //método para mostrar las Productos
	
	public function mostrarSuelo()
	{
		$suelo = $this->ListarTodosLosSuelos();
		return view('suelo.todos', ['suelo' => $suelo]);
	}
}