<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class SueloController extends ClienteController
{
    //método para mostrar las suelo
	
	public function mostrarSuelos()
	{
		$suelo = $this->obtenerTodosLosSuelos();
		return view('suelo.todos', ['suelo' => $suelo]);
	}
	
	public function obtenerSuelo(UnicoRequest $request)
    {
        $Id_sue = $request->get('Id_sue');
        $suelo = $this->obtenerUnSuelo($Id_sue);
        return view('suelo.mostrar', ['suelo' => $suelo]);
    }

	public function mostrarSuelo()
    {
        return view('suelo.unico');
    }
    
	//métodos para agregar suelo
    public function agregarSuelo()
    {
        return view('suelo.agregar');
    }
	
 
 
    public function crearSuelo(Request $request)
    {

        $this->almacenarSuelo($request);
        return redirect('/suelo');
    }
	
		
	//Métodos para Modificar suelo
    //1. 
    public function elegirSuelo()
    {
        $suelo = $this->obtenerTodosLosSuelos();
        return view('suelo.elegir', ['suelo' => $suelo]);
    }
	
	public function editarSuelo(Request $request)
    {
        $Id_sue = $request->get('suelo_	Id_sue');
        $suelo = $this->obtenerUnSuelo($Id_sue);
        return view('suelo.editar', ['suelo' => $suelo]);
    }
	
	
    public function actualizarSuelo(Request $request)
    {
        $this->modificarSuelo($request);
        return redirect('/suelo');
    }
	
	//Método para Eliminar suelo
	
		    public function seleccionarSuelo()
    {
        $suelo = $this->obtenerTodosLosSuelos();
        return view('suelo.seleccionar', ['suelo' => $suelo]);
    }
	
    public function eliminarSuelo(Request $request)
    {
        $this->removerSuelo($request);
        return redirect('/suelo');
    }
}