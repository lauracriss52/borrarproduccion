<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class PersonasController extends Controller
{
     public function mostrarPersonas()
	{
		$personas = $this->Obtenertodoslospersonas();	
		return view('personas.todos',['personas'=>$personas]);
//		return 'hello';
	}
	
	protected function Obtenertodoslospersonas()
	{
		$respuesta=$this->realizarPeticion('GET' , 'http://agroproduccion.com:8889/personas');
		//transformacion a json
		$datos= json_decode($respuesta);
		$personas=$datos->data;
		return $personas;

	}
}
