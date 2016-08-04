<?php
namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class CosechasController extends Controller
{
    public function mostrarCosechas()
	{
$cosechas = $this->Obtenertodosloscosechas();	
		return view('cosechas.todos',['cosechas'=>$cosechas]);
//		return 'hello';
	}
	
	protected function Obtenertodosloscosechas()
	{
		$respuesta=$this->realizarPeticion('GET' , 'http://agroproduccion.com:8889/cosechas');
		//transformacion a json
		$datos= json_decode($respuesta);
		$cosechas=$datos->data;
		return $cosechas;

	}
	
}