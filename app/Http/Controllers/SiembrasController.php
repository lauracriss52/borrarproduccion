<?php
namespace produccion\Http\Controllers;
use Illuminate\Http\Request;
use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class SiembrasController extends ClienteController
{
 public function mostrarSiembras()
    {
    	$siembras = $this->obtenerTodasLasSiembras();
		return view('siembras.todos', ['siembras' => $siembras]);
    }
    public function mostrarSiembra()
    {
        return view('siembras.unico');
    }
    public function obtenerSiembra(UnicoRequest $request)
    {
        $id = $request->get('id');
		//echo $id;
        $siembra = $this->obtenerUnaSiembra($id);
        return view('siembras.mostrar', ['siembra' => $siembra]);
    }
	
}	
	
	
	
	
 /*  
 
        $id = $request->get('id');
       // $siembra = $this->obtenerUnaSiembra($id);
		$respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/siembras/{$id}");
        $datos = json_decode($respuesta);
        $siembra = $datos->data;
        return view('siembras.mostrar', ['siembra' => $siembra]);
    }
	
	    public function agregarSiembra()
    {
        return view('siembras.agregar');
    }
    public function crearSiembra(Request $request)
    {
        $access_token = 'Bearer '.$this->obtenerAccessToken();
        echo $access_token;
		$respuesta = $this->realizarPeticion('POST', 'http://agroproduccion.guayabavelez.com/siembras', ['headers' => ['Authorization' => $access_token], 'form_params' => $request->all()]);
        return redirect('/siembras');
    }
 
	
 
 
  protected function obtenerTodasLasSiembras()
    {
    	$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/siembras');
    	$datos = json_decode($respuesta);
    	$siembras = $datos->data;
    	return $siembras;
    }
	
	   protected function obtenerUnaSiembra($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/siembras/{$id}");
        $datos = json_decode($respuesta);
        $siembra = $datos->data;
        return $siembra;
    }
	
	
	
	
	*/
