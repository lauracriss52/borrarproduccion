<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class ProductoController extends Controller
{
    //método para mostrar las Productos
	
	public function mostrarProductos()
	{
		$productos = $this->ListarTodosLosProductos();
		return view('productos.todos', ['productos' => $productos]);
	}
}
