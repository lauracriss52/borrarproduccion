<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class PersonasController extends Controller
{
     public function mostrarPersonas()
	{
		$personas = $this->obtenerTodasLaspersonas();	
		return view('personas.todos',['personas'=>$personas]);
//		return 'hello';
	}
	
	protected function obtenerTodasLaspersonas()
	{
		$respuesta=$this->realizarPeticion('GET' , 'http://agroproduccion.com:81/personas');
		//transformacion a json
		$datos= json_decode($respuesta);
		$personas=$datos->data;
		return $personas;

	}
}
