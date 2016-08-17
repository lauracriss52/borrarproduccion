@extends('layouts.master')
@section('contenido')
    <div class="list-group">
        <a href="{{url('/siembras')}}" class="list-group-item">Obtener Todos los Cultivos de guayaba </a>
        <a href="{{url('/personas')}}" class="list-group-item">Obtener Todos los Productores </a>
        <a href="{{url('/cosechas')}}" class="list-group-item">Obtener Todas las Cosechas </a>
        <a href="{{url('/fincas/')}}" class="list-group-item">Obtener todas las fincas</a>
        <a href="{{url('/anopro/')}}" class="list-group-item">Obtener todos los Años de produccion</a>
        <a href="{{url('/novedad/')}}" class="list-group-item">Obtener todas las Novedades</a>
        
    </div>

<div class="list-group">
<a href="{{url('/cosechas/unico')}}" class="list-group-item"> Obtener una Cosecha</a>
<a href="{{url('/personas/unico')}}" class="list-group-item">Obtener Una Persona</a>
<a href="{{url('/siembras/unico')}}" class="list-group-item">Obtener Una Siembra</a>
<a href="{{url('/fincas/unico')}}" class="list-group-item">Obtener una finca</a>
</div>

<div class="list-group">
			<a href="{{url('/cosechas/agregar')}}" class="list-group-item">Agregar Una Cosecha</a>
			<a href="{{url('/personas/siembras/agregar')}}" class="list-group-item">Agregar una Siembra</a>      
            <a href="{{url('/personas/agregar')}}" class="list-group-item">Agregar Una Persona</a>
            <a href="{{url('/fincas/agregar')}}" class="list-group-item">Agregar Una Finca</a>         
		</div>


<div class="list-group">
			<a href="{{url('/cosechas/actualizar')}}" class="list-group-item">Actualizar Una Cosecha</a>
		<a href="{{url('/personas/actualizar')}}" class="list-group-item">Actualizar Una Persona</a>
        <a href="{{url('/personas/siembras/actualizar')}}" class="list-group-item">Actualizar Una Siembra</a>
        <a href="{{url('/fincas/actualizar')}}" class="list-group-item">Actualizar Una Finca</a>
        
		</div>

		<div class="list-group">
			<a href="{{url('/cosechas/eliminar')}}" class="list-group-item">Eliminar Una Cosecha</a>

			<a href="{{url('/personas/eliminar')}}" class="list-group-item">Eliminar Una Persona</a>
            <a href="{{url('/personas/siembras/eliminar')}}" class="list-group-item">Eliminar Una Siembra</a>
            <a href="{{url('/fincas/eliminar')}}" class="list-group-item">Eliminar Una Finca</a>
		</div>
        
       <div class="list-group">
			<p><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a>
			  <a href="{{url('/personas/siembras')}}" class="list-group-item">Obtener las Siembras de Una Persona</a>
			  <a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener el rendimiento de la cosecha</a>
			  <a href="{{url('/siembras/cosechas/agregar')}}" class="list-group-item">Agregar una Cosecha a Una Siembra</a>
			  <a href="{{url('/siembras/cosechas/eliminar')}}" class="list-group-item">Eliminar una Cosecha de Una Siembra</a>
			     </div>
	     </p>
         
            <div class="list-group">
        <p><a href="{{url('/productos')}}" class="list-group-item">Listar Todos los Productos</a>
        <a href="{{url('/productos/unico')}}" class="list-group-item">Obtener un Producto</a>
        <a href="{{url('/productos/agregar')}}" class="list-group-item">Agregar un Producto</a>
        <a href="{{url('/productos/actualizar')}}" class="list-group-item">Actualizar un Producto</a>
        <a href="{{url('/productos/eliminar')}}" class="list-group-item">Eliminar un Producto</a>
        
        </div>
          
        <div class="list-group">
        <p><a href="{{url('/usuariocliente')}}" class="list-group-item">Listar Todos los Usuarios</a>
        
        </div>
        
         <div class="list-group">
        <p><a href="{{url('/suelo')}}" class="list-group-item">Listar Todos los Suelos</a>
        
        </div>
         
      
        

@endsection