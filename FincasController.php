<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;
use produccion\Http\Requests\UnicoRequest;

class FincasController extends ClienteController
{
     //método para mostrar las fincas
	
  public function mostrarFincas()
    {
    	$fincas = $this->obtenerTodasLasFincas();
    	return view('fincas.todos', ['fincas' => $fincas]);
}
	//métodos para buscar una finca
    public function mostrarFinca()
    {
        return view('fincas.unico');
    }
	
	
    public function obtenerFinca(UnicoRequest $request)
    {
        $id = $request->get('id');
        $finca = $this->obtenerUnaFinca($id);
        return view('fincas.mostrar', ['finca' => $finca]);
    }
	
	
	
}
