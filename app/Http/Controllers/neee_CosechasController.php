<?php
namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class CosechasController extends Controller
{
    public function mostrarCosechas()
	{
$cosechas = $this->obtenerTodasLascosechas();	
		return view('cosechas.todos',['cosechas'=>$cosechas]);
//		return 'hello';
	}
	
	protected function obtenerTodasLascosechas()
	{
		$respuesta=$this->realizarPeticion('GET' , 'http://agroproduccion.com:81/cosechas');
		//transformacion a json
		$datos= json_decode($respuesta);
		$cosechas=$datos->data;
		return $cosechas;

	}
	
}