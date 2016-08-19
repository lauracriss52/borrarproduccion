<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;
use produccion\Http\Requests\UnicoRequest;

class ProductosController extends ClienteController
{
       //método para mostrar las Productos
	
		
	public function mostrarProductos()
			
	{
		$productos = $this->obtenerTodosLosProductos();
		return view('productos.todos', ['productos' => $productos]);
	}
	
	public function obtenerProducto(UnicoRequest $request)
    {
        $id = $request->get('id');
        $productos = $this->obtenerUnProducto($id);
        return view('productos.mostrar', ['productos' => $productos]);
    }
	
	
	public function mostrarProducto()
    {
        return view('productos.unico');
    }
    
	//métodos para agregar fincas
    public function agregarProducto()
    {
        return view('productos.agregar');
    }
	
 
 
    public function crearProducto(Request $request)
    {

        $this->almacenarProducto($request);
        return redirect('/productos');
    }
	
		
	//Métodos para Modificar Productos
    //1. 
    public function elegirProducto()
    {
        $productos = $this->obtenerTodosLosProductos();
        return view('productos.elegir', ['productos' => $productos]);
    }
	
	public function editarProducto(Request $request)
    {
        $id = $request->get('productos_id');
        $productos = $this->obtenerUnProducto($id);
        return view('productos.editar', ['productos' => $productos]);
    }
	
	
    public function actualizarProducto(Request $request)
    {
        $this->modificarProducto($request);
        return redirect('/productos');
    }
	
	//Método para Eliminar productos
	
		    public function seleccionarProducto()
    {
        $productos = $this->obtenerTodosLosProductos();
        return view('productos.seleccionar', ['productos' => $productos]);
    }
	
    public function eliminarProducto(Request $request)
    {
        $this->removerProducto($request);
        return redirect('/productos');
    }
}
