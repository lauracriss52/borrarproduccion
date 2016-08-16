<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class ProductosController extends ClienteController
    //método para mostrar las Productos
	
		{
			public function mostrarProductos()
			
			{
		$producto = $this->ListarTodosLosProductos();
		return view('producto.todos', ['producto' => $producto]);
	}
}
