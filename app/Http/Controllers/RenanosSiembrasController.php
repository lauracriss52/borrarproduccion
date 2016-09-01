<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class RenanosSiembraController extends ClienteController
{
	  public function mostrarPersonas()
    {
    	$siembras = $this->obtenerTodasLasSiembra();
    	return view('siembra-renanos.siembras', ['siembras' => $siembras]);
	}
    public function mostrarRenanosSiembra(Request $request)
    {
    	$renanoId = $request->get('siembra_id');
    	$renanos = $this->obtenerRenanosSiembra($renanoId);
    	return view('siembra-siembras.renano', ['renanos' => $renanos]);	
	}
//Agregar renano
//1. Formulario para agregar una renano cargando las siembras que ya están en la basede datos
  public function agregarFinca()
    {
		 $siembras = $this->obtenerTodasLasRenanos();
		return view('siembra-renanos.agregar', ['siembras' => $siembras]);
    }
	
 
 
    public function crearRenano(Request $request)
    {
        $this->almacenarRenano($request);
        return redirect('/renanos');
    }

//Eliminar una renano
//1.
	
	 public function seleccionarFinca()
    {
        $renanos = $this->obtenerTodasLasRenanos();
	
        return view('siembra-renanos.seleccionar', ['renanos' => $renanos]);
    }
//2.
    public function eliminarRenano(Request $request)
    {
        $this->removerRenano($request);
        return redirect('/renanos');
    }

//actualizar renanos
//1.

public function elegirRenano()
    {
        $renanos = $this->obtenerTodasLasRenanos();

        return view('siembra-renanos.elegir', ['renanos' => $renanos]);
    }
//2. Editar renano

    public function editarRenano(Request $request)
    {
        $idFinca = $request->get('renano_id');

        $renano = $this->obtenerUnaRenano($idFinca);
   		
        $siembras = $this->obtenerTodasLasSiembras();

        return view('siembra-renanos.editar', ['renano' => $renano, 'siembras' => $siembras]);
    }

    public function actualizarRenano(Request $request)
    {
        $this->modificarRenano($request);

        return redirect('/renanos');
	}
}