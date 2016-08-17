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
		$producto = $this->obtenerTodosLosProductos();
		return view('producto.todos', ['producto' => $producto]);
	}
	public function mostrarProducto()
    {
        return view('producto.unico');
    }
    public function obtenerProducto(UnicoRequest $request)
    {
        $id = $request->get('id');
        $producto = $this->obtenerUnProducto($id);
        return view('producto.mostrar', ['producto' => $producto]);
    }
	
	//métodos para agregar fincas
    public function agregarProducto()
    {
        return view('producto.agregar');
    }
	

 
 
    public function crearProducto(Request $request)
    {
        $this->almacenarProducto($request);
        return redirect('/producto');
    }

	
		
	//Métodos para Modificar Productos
    //1. 
    public function elegirProducto()
    {
        $fincas = $this->obtenerTodosLosProductos();
        return view('producto.elegir', ['producto' => $producto]);
    }

	
	public function editarProducto(Request $request)
    {
        $id = $request->get('producto_id');
        $cosecha = $this->obtenerProducto($id);
        return view('producto.editar', ['producto' => $producto]);
    }
	
	
    public function actualizarProducto(Request $request)
    {
        $this->modificarProducto($request);
        return redirect('/producto');
    }

	
	//Método para Eliminar productos
	
		    public function seleccionarProducto()
    {
        $fincas = $this->obtenerTodosLosProductos();
        return view('producto.seleccionar', ['producto' => $producto]);
    }
	
    public function eliminarProducto(Request $request)
    {
        $this->removerProducto($request);
        return redirect('/producto');
    }

}  

