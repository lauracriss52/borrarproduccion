<?php
namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;
class CosechasController extends ClienteController
{

  public function mostrarCosechas()
    {
    	$cosechas = $this->obtenerTodasLasCosechas();
    	return view('cosechas.todos', ['cosechas' => $cosechas]);
    }
	
	//métodos para buscar un cosecha
    public function mostrarCosecha()
    {
        return view('cosechas.unico');
    }
	
	
    public function obtenerCosecha(UnicoRequest $request)
    {
        $id = $request->get('id');
        $cosecha = $this->obtenerUnaCosecha($id);
        return view('cosechas.mostrar', ['cosecha' => $cosecha]);
    }
	//métodos para agregar cosechas
    public function agregarCosecha()
    {
        return view('cosechas.agregar');
    }
	

 
 
    public function crearCosecha(Request $request)
    {
        $this->almacenarCosecha($request);
        return redirect('/cosechas');
    }

	
		
	//Métodos para editar cosechas
    //1. 
    public function elegirCosecha()
    {
        $cosechas = $this->obtenerTodasLasCosechas();
        return view('cosechas.elegir', ['cosechas' => $cosechas]);
    }

	//.2
	public function editarCosecha(Request $request)
    {
        $id = $request->get('cosecha_id');
        $cosecha = $this->obtenerUnaCosecha($id);
        return view('cosechas.editar', ['cosecha' => $cosecha]);
    }
	
	//3.
    public function actualizarCosecha(Request $request)
    {
        $this->modificarCosecha($request);
        return redirect('/cosechas');
    }

	
	//Método para Eliminar cosechas
	
		    public function seleccionarCosecha()
    {
        $cosechas = $this->obtenerTodasLasCosechas();
        return view('cosechas.seleccionar', ['cosechas' => $cosechas]);
    }
	
    public function eliminarCosecha(Request $request)
    {
        $this->removerCosecha($request);
        return redirect('/cosechas');
    }

}  

/*
  public function mostrarCosechas()
    {
    	$cosechas = $this->obtenerTodasLasCosechas();
    	return view('cosechas.todos', ['cosechas' => $cosechas]);
    }
    protected function obtenerTodasLasCosechas()
    {
    	$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/cosechas');
    	$datos = json_decode($respuesta);
    	$cosechas = $datos->data;
    	return $cosechas;
    }
    public function mostrarCosecha()
    {
        return view('cosechas.unico');
    }

	//métodos para buscar un cosecha
    public function obtenerCosecha(UnicoRequest $request)
    {
        $id = $request->get('id');
        $cosecha = $this->obtenerUnaCosecha($id);
        return view('cosechas.mostrar', ['cosecha' => $cosecha]);
    }
    protected function obtenerUnaCosecha($id)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/cosechas/{$id}");
        $datos = json_decode($respuesta);
        $cosecha = $datos->data;
        return $cosecha;
    }
	
	//métodos para agregar cosechas
    public function agregarCosecha()
    {
        return view('cosechas.agregar');
    }
    public function crearCosecha(Request $request)
    {
        $access_token = 'Bearer '.$this->obtenerAccessToken();
        echo $access_token;
		$respuesta = $this->realizarPeticion('POST', 'http://agroproduccion.guayabavelez.com/cosechas', ['headers' => ['Authorization' => $access_token], 'form_params' => $request->all()]);
        return redirect('/cosechas');
    }
	
	
	//Funciones para editar cosechas
	
	 public function elegirCosecha()
    {
        $cosechas = $this->obtenerTodasLasCosechas();
        return view('cosechas.elegir', ['cosechas' => $cosechas]);
    }
    public function editarCosecha(Request $request)
    {
        $id = $request->get('cosecha_id');
        $cosecha = $this->obtenerUnaCosecha($id);
        return view('cosechas.editar', ['cosecha' => $cosecha]);
    }
    public function actualizarCosecha(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $id = $request->get('id');
        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/cosechas/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
        return redirect('/cosechas');
    }*/