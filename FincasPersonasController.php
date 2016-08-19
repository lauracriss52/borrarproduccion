<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class FincasPersonasController extends ClienteController
{
    //mostrar las personas y sus fincas
	//Yesid falta hacer este link es muy parecido a consultar siembra por persona
	  public function mostrarPersonas()
    {
    	$personas = $this->obtenerTodasLasPersonas();
    	return view('persona-fincas.personas', ['personas' => $personas]);
    }
	
	 //mostrar las personas y sus fincas
	//Yesid falta hacer este link es muy parecido a consultar siembra por persona
    public function mostrarFincasPersona(Request $request)
    {
    	$fincaId = $request->get('persona_id');
    	$fincas = $this->obtenerFincasPersona($fincaId);
    	return view('persona-siembras.fincas', ['fincas' => $fincas]);
    }
	
	//métodos para agregar fincas
    public function agregarFinca()
    {
		 $personas = $this->obtenerTodasLasPersonas();
		return view('persona-siembras.agregar', ['personas' => $personas]);
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
