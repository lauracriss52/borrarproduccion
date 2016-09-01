<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;
use produccion\Http\Requests\UnicoRequest;

class NovedadesProductosController extends ClienteController
{
//Agregar novedad
//1. Formulario para agregar una novedad cargando las productos que ya están en la basede datos
  public function agregarNovedad()
    {
		 $productos = $this->obtenerTodosLosProductos();
		return view('producto-novedades.agregar', ['productos' => $productos]);
		 $productos = $this->obtenerTodosLasSiembras();
		return view('producto-novedades.agregar', ['siembras' => $siembras]);
    }

    public function crearNovedad(Request $request)
    {
        $this->almacenarNovedad($request);
        return redirect('/novedades');
    }

//Eliminar una novedad
//1.
	 public function seleccionarNovedad()
    {
        $novedades = $this->obtenerTodasLasNovedades();
        return view('producto-novedades.seleccionar', ['novedades' => $novedades]);
    }

//2.
    public function eliminarNovedad(Request $request)
    {
        $this->removerNovedad($request);
        return redirect('/novedad');
    }

//actualizar novedades
//1.

public function elegirNovedad()
    {
        $novedades = $this->obtenerTodasLasNovedades();

        return view('novedades.elegir', ['novedad' => $novedades]);
    }
//2. Editar novedad

    public function editarNovedad(Request $request)
    {
        $idFinca = $request->get('novedad_id');

        $novedad = $this->obtenerUnaNovedad($idNovedad);
   		
        $productos = $this->obtenerTodosLosProductos();
		
		 $siembras = $this->obtenerTodasLasSiembras();

        return view('novedades.editar', ['novedad' => $novedad, 'productos' => $productos, 'siembras' => $siembras]);
    }

    public function actualizarNovedad(Request $request)
    {
        $this->modificarNovedad($request);

        return redirect('/noveadaes');
	}

}