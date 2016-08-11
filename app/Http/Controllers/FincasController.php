<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class FincasController extends Controller
{
    //método para mostrar las fincas
	
  public function mostrarFincas()
    {
    	$fincas = $this->obtenerTodasLasFincas();
    	return view('fincass.todos', ['fincas' => $fincas]);
    }
	
	//métodos para buscar un cosecha
    public function mostrarFincas()
    {
        return view('cosechas.unico');
    }
	
	
    public function obtenerFincas(UnicoRequest $request)
    {
        $id = $request->get('id');
        $finca = $this->obtenerUnaFinca($id);
        return view('fincas.mostrar', ['finca' => $finca]);
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

	
		
	//Métodos para editar fincas
    //1. 
    public function elegirFinca()
    {
        $cosechas = $this->obtenerTodasLasFincas();
        return view('fincas.elegir', ['fincas' => $fincas]);
    }

	//.2
	public function editarFinca(Request $request)
    {
        $id = $request->get('finca_id');
        $finca = $this->obtenerUnaFinca($id);
        return view('fincas.editar', ['finca' => $finca]);
    }
	
	//3.
    public function actualizarFinca(Request $request)
    {
        $this->modificarFinca($request);
        return redirect('/fincas');
    }

	
	//Método para Eliminar finca
	
		    public function seleccionarFinca()
    {
        $cosechas = $this->obtenerTodasLasFincas();
        return view('fincas.seleccionar', ['fincas' => $fincas]);
    }
	
    public function eliminarFinca(Request $request)
    {
        $this->removerFinca($request);
        return redirect('/fincas');
    }

}  

	
}
