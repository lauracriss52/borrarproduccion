<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class UsuarioClienteController extends ClienteController
{
    //método para mostrar las Productos
	
	public function mostrarUsuarioCliente()
	{
		$usuariocliente = $this->ListarTodosLosUsuarios();
		return view('usuariocliente.todos', ['usuariocliente' => $usuariocliente]);
	}
}