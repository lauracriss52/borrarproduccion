<?php

namespace produccion\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use GuzzleHttp\Client;
	
class Controller extends BaseController
{
	//autiza el uso de entradas
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
	
	//función de entrada cuando se realiza una ´petición
    protected function realizarPeticion($metodo, $url, $parametros=[])
    {
		
		//se crea una instancia de client para el Guzzlehttp, para realizar peticiones a sitios seguros https es necesrio un certificado de seridad para ello, y se le indica al cliente donde esta ubicado para que cada vez que solicite una conexión segura y el equipo pida un certificado utilice este.
		//base_parh es una función de laravel para buscar el directorio raiz
    	$cliente = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert.pem')]]);

		//Request resive los parametos de la línea 20
    	$respuesta = $cliente->request($metodo, $url, $parametros);
    	return $respuesta->getBody()->getContents();
    }
}
