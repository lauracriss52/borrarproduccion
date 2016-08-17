<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class FincasController extends ClienteController
{
    //método para mostrar las fincas
	
  public function mostrarFincas()
    {
    	$fincas = $this->obtenerTodasLasFincas();
    	return view('fincas.todos', ['fincas' => $fincas]);
}

	//métodos para buscar una finca
    public function mostrarFinca()
    {
        return view('fincas.unico');
    }
	
	
    public function obtenerFinca(UnicoRequest $request)
    {
        $id = $request->get('id');
        $fincas = $this->obtenerUnaFinca($id);
        return view('fincas.mostrar', ['finca' => $fincas]);
    }
	//métodos para agregar fincas
    public function agregarFinca()
    {
        return view('fincas.agregar');
    }
	

 
 
    public function crearFinca(Request $request)
    {
        $this->almacenarFinca($request);
        return redirect('/fincas');
    }

	
		
	//Métodos para editar Fincas
    //1. 
    public function elegirFinca()
    {
        $fincas = $this->obtenerTodasLasFincas();
        return view('fincas.elegir', ['finca' => $fincas]);
    }

	//.2
	public function editarFinca(Request $request)
    {
        $id = $request->get('finca_id');
        $cosecha = $this->obtenerUnaFinca($id);
        return view('fincas.editar', ['finca' => $finca]);
    }
	
	//3.
    public function actualizarFinca(Request $request)
    {
        $this->modificarFinca($request);
        return redirect('/fincas');
    }

	
	//Método para Eliminar fincas
	
		    public function seleccionarFinca()
    {
        $fincas = $this->obtenerTodasLasFincas();
        return view('fincas.seleccionar', ['fincas' => $fincas]);
    }
	
    public function eliminarFinca(Request $request)
    {
        $this->removerFinca($request);
        return redirect('/fincas');
    }

}  



