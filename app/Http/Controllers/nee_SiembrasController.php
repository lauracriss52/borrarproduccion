<?php
namespace produccion\Http\Controllers;
use Illuminate\Http\Request;
use produccion\Http\Requests;
class SiembrasController extends Controller
{
    public function mostrarSiembras()
    {
    	$siembras = $this->obtenerTodasLasSiembras();
    	return view('siembras.todos', ['siembras' => $siembras]);
    }
    protected function obtenerTodasLasSiembras()
    {
    	$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/siembras');
    	$datos = json_decode($respuesta);
    	$siembras = $datos->data;
    	return $siembras;
    }
}