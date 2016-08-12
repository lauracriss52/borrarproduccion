<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class PersonasController extends ClienteController
{
  	 public function mostrarPersonas()
    {
    	$personas = $this->obtenerTodasLasPersonas();
    	return view('personas.todos', ['personas' => $personas]);
    }
    public function mostrarPersona()
    {
        return view('personas.unico');
    }
    public function obtenerPersona(UnicoRequest $request)
    {
        $id = $request->get('id');
        $persona = $this->obtenerUnaPersona($id);
        return view('personas.mostrar', ['persona' => $persona]);
    }
    public function agregarPersona()
    {
        return view('personas.agregar');
    }
    public function crearPersona(Request $request)
    {
        $this->almacenarPersona($request);
        return redirect('/personas');
    }
    public function elegirPersona()
    {
        $personas = $this->obtenerTodasLasPersonas();
        return view('personas.elegir', ['personas' => $personas]);
    }
    public function editarPersona(Request $request)
    {
        $id = $request->get('persona_id');
        $persona = $this->obtenerUnaPersona($id);
        return view('personas.editar', ['persona' => $persona]);
    }
	
    public function actualizarPersona(Request $request)
    {
        $this->modificarPersona($request);
        return redirect('/personas');
    }
	
    public function seleccionarPersona()
    {
        $personas = $this->obtenerTodasLasPersonas();
        return view('personas.seleccionar', ['personas' => $personas]);
    }
	
    public function eliminarPersona(Request $request)
    {
        $this->removerPersona($request);
        return redirect('/personas');
    }
	
}
