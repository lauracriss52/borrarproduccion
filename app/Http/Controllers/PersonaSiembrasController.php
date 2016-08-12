<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class PersonaSiembrasController extends ClienteController
{
      public function mostrarPersonas()
    {
    	$personas = $this->obtenerTodasLasPersonas();
    	return view('persona-siembras.personas', ['personas' => $personas]);
    }
    public function mostrarSiembrasPersona(Request $request)
    {
    	$siembraId = $request->get('persona_id');
    	$siembras = $this->obtenerSiembrasPersona($siembraId);
    	return view('persona-siembras.siembras', ['siembras' => $siembras]);
    }
//Agregar siembra
//1. Formulario para agregar una siembra cargando las personas que ya están en la basede datos
public function agregarSiembra()
    {
        $personas = $this->obtenerTodasLasPersonas();

        return view('persona-siembras.agregar', ['personas' => $personas]);
    }

    public function crearSiembra(Request $request)
    {
        $this->almacenarSiembra($request);

        return redirect('/siembras');
    }
//Eliminar una siembra
//1.
	 public function seleccionarSiembra()
    {
        $siembras = $this->obtenerTodasLasSiembras();

        return view('persona-siembras.seleccionar', ['siembras' => $siembras]);
    }
//2.
    public function eliminarSiembra(Request $request)
    {
        $this->removerSiembra($request);
        return redirect('/siembras');
    }

//actualizar siembras
//1.
public function elegirSiembra()
    {
        $siembras = $this->obtenerTodasLasSiembras();

        return view('persona-siembras.todos', ['siembras' => $siembras]);
    }
//2. Editar Siembra

    public function editarSiembra(Request $request)
    {
        $idSiembra = $request->get('siembra_id');

        $siembra = $this->obtenerUnaSiembra($idSiembra);
   		
        $personas = $this->obtenerTodasLasPersonas();

        return view('persona-siembras.editar', ['siembra' => $siembra, 'personas' => $personas]);
    }

    public function actualizarSiembra(Request $request)
    {
        $this->modificarSiembra($request);

        return redirect('/siembras');
    }

}
