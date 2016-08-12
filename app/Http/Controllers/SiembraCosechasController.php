<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class SiembraCosechasController extends ClienteController
{
 	public function mostrarSiembras()
    {
    	$siembras = $this->obtenerTodasLasSiembras();
    	return view('siembra-cosechas.siembras', ['siembras' => $siembras]);
    }
	
	
    public function mostrarCosechadeunasiembra(Request $request)
    {
    	$siembraId = $request->get('siembra_id');
    	$cosechas = $this->obtenerCosechasunaSiembra($siembraId);
    	return view('siembra-cosechas.cosechas', ['cosechas' => $cosechas]);
    }
	
	public function mostrarrendimientoSiembras()
	{
		$cosechas_siembras = $this->obtenerrendimiento();
    	return view('siembra-cosechas.mostrar', ['cosechas_siembras' => $cosechas_siembras]);		
	}
	
	
	 public function formularioagregarCosechasSiembras()
    {

        $siembras = $this->obtenerTodasLasSiembras();
		$cosechas = $this->obtenerTodasLasCosechas();
//$cosechas='1';
        return view('siembra-cosechas.formularioagregar', ['siembras' => $siembras, 'cosechas' => $cosechas]);
    }

    public function agregarCosechaSiembra(Request $request)
    {
        $this->agregarCosechaSiembras($request);

        return redirect('/siembras/cosechas');
    }
	
	 
	
	//Eliminar un siembra asignado a un cosecha
	
	
    public function seleccionarSiembra()
    {
        $siembras = $this->obtenerTodasLasSiembras();

        return view('siembra-cosechas.seleccionar-siembra', ['siembras' => $siembras]);
    }

    public function seleccionarCosechaSiembra(Request $request)
    {
        $siembraId = $request->get('siembra_id');
        $cosechas = $this->obtenerCosechasSiembra($siembraId);

        return view('siembra-cosechas.seleccionar-cosecha', ['cosechas' => $cosechas, 'siembraId' => $siembraId]);        
    }

    public function eliminarCosechaSiembra(Request $request)
    {
        $this->removerCosechaSiembra($request);

        return redirect('/siembras/cosechas');
    }
	



	
	
	
	
	
}
