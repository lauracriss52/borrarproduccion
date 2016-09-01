<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;
use produccion\Http\Requests\UnicoRequest;

class RenanosController extends ClienteController
{
     //método para mostrar las renano
	
  public function mostrarRenanos()
    {
    	$renanos = $this->obtenerTodasLasRenanos();
    	return view('renanos.todos', ['renanos' => $renanos]);
}
	//métodos para buscar una renano
    public function mostrarRenano()
    {
        return view('renanos.unico');
    }
	
	
    public function obtenerRenano(UnicoRequest $request)
    {
        $id = $request->get('id');
        $renano = $this->obtenerUnaRenano($id);
        return view('renanos.mostrar', ['renanos' => $renano]);
    }
	
	
	
}
