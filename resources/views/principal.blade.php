@extends('layouts.master')

@section('contenido')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Gestión siembras de Guayaba</a>
    </div>
    </div>
  </div>
</nav>

<div class="container">
<!--siembras------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/siembras.png">
      <div >
          <h4><a href="{{url('/siembras')}}" class="list-group-item"> Listar siembras</a></h4>
      </div>
   </div>
 </div>
 
 <div class="col-xs-2">
   <div class="thumbnail">
  
   <img src="/images/siembra.png">
   <h4 > <a href="{{url('/siembras/unico')}}" class="list-group-item">
Consulta siembras por código
          </a>
  </h4>
   </div>
  
 </div>
 

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenersiempersona.png" >
      <div>
          <h4><a href="{{url('/personas/siembras')}}" class="list-group-item" >Consultar siembras de una Persona</a></h4>
      </div>
   </div>
 </div>
 
<!--Productores------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosproductores.png" >
      <div >
          <h4> <a href="{{url('/personas')}}" class="list-group-item" >Listar Productores</a></h4>
      </div>
   </div>
 </div>

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/persona.png" >
      <div >
          <h4 ><a href="{{url('/personas/unico')}}" class="list-group-item">Obtener Una Persona</a></h4>
      </div>
   </div>
 </div>

<!--Cosecchas------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/guayabas.png">
      <div >
          <h4 ><a href="{{url('/cosechas')}}" class="list-group-item">Listar Cosechas </a></h4>
      </div>
   </div>
 </div>

</div>


<div class="container">


<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/guayaba.png" >
      <div >
          <h4> <a href="{{url('/cosechas/unico')}}" class="list-group-item" >Obtener una Cosecha</a></h4>
      </div>
   </div>
 </div>


<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png" class="">
      <div >
          <h4><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a></h4>
      </div>
   </div>
 </div>

<div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/Obtenerrendimientocosecha.png" class="">
      <div >
          <h4 ><a href="{{url('/siembras/cosechas')}}"class="list-group-item" >Obtener el rendimiento de la cosecha</a></h4>
      </div>
   </div>
 </div>


<!--Fincas------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/fincaandfincas.png" class="">
      <div >
          <h4><a href="{{url('/fincas')}}"  class="list-group-item">Listar fincas </a></h4>
      </div>
   </div>
 </div>


<div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/finca2.png" class="">
      <div >
          <h4 ><a href="{{url('/fincas/unico')}}" class="list-group-item">Obtener una finca</a></h4>
      </div>
   </div>
 </div>



<!--año------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">

   <img src="/images/ObtenerTodosaños.png" class="">
      <div >
          <h4 ><a href="{{url('/renanos')}}" class="list-group-item" >Listar Produccion al Año</a></h4>
      </div>
   </div>
 </div>

</div>

<div class="container">

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosaños.png" class="">
      <div >
          <h4 ><a href="{{url('/renanos/unico')}}" class="list-group-item" >Obtener la Produccion de un Año</a></h4>
      </div>
   </div>
 </div>

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/productos.png" class="">
      <div >
          <h4 ><a href="{{url('/productos')}}" class="list-group-item">Listar Todos los Productos</a></h4>
      </div>
   </div>
 </div>



 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/guayaba.png" class="">
      <div >
          <h4 ><a href="{{url('/productos/unico')}}" class="list-group-item">Obtener un Producto </a></h4>
      </div>
   </div>
 </div>
 

<!--Suelos------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/suelos.png" class="">
      <div >
          <h4 ><a href="{{url('/suelos')}}" class="list-group-item">Listar Suelos</a></h4>
      </div>
   </div>
 </div>
 
 
  <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/suelos.png" class="">
      <div >
          <h4 ><a href="{{url('/suelos/unico')}}" class="list-group-item">Buscar Suelo </a></h4>
      </div>
   </div>
 </div>
 
 
<!--Usuarios------------------------------->

 <div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/ObtenerTodosproductores.png" class="">
      <div >
          <h4 ><a href="{{url('/usuariocliente')}}" class="list-group-item">Listar Usuarios </a></h4>
      </div>
   </div>
 </div>
 
</div>


<div class="container">
 
  <div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/persona.png" class="">
      <div >
          <h4 ><a href="{{url('/usariocliente/unico')}}" class="list-group-item">Obtener un Usuario </a></h4>
      </div>
   </div>
 </div>
 
 
 
 
 
 




<!--Novedades------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/ObtenerTodosnovedad.png" class="">
      <div >
          <h4 ><a href="{{url('/novedades')}}" class="list-group-item">Listar Novedades </a></h4>
      </div>
   </div>
 </div>
 
 
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosnovedad.png" class="">
      <div >
          <h4 ><a href="{{url('/novedad/unico')}}" class="list-group-item">Obtener una Novedad </a></h4>
      </div>
   </div>
 </div>
 
 
 
 


 </div>
 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Gestion</a>
    </div>
    </div>
  </div>

</nav>

<div class="container">
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/personas.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Personas</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Personas</a></li>
    <li><a href="#">Buscar Personas</a></li>
    <li><a href="{{url('/personas/agregar')}}">Agregar Personas</a></li>
    <li><a href="{{url('/personas/actualizar')}}">Actualizar Personas</a></li>
     <li><a href="{{url('/personas/eliminar')}}">Eliminar Personas</a></li>
  </ul>
      
	
   </div>
 </div>
 </div>
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/fincaandfincas.png">
   <p>
     <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Fincas</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/fincas')}}">Obtener Fincas</a></li>
    <li><a href="{{url('/fincas/unico')}}">Buscar Fincas</a></li>
    <li><a href="{{url('/personas/fincas/agregar')}}">Agregar Fincas</a></li>
    <li><a href="{{url('/personas/fincas/actualizar')}}"> Actualizar Fincas</a></li>
     <li><a href="{{url('/fincas/eliminar')}}">Eliminar Fincas</a></li>
  </ul>

          
      </div>
   </div>
 </div>
 
 
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/guayabas.png" width="" height="">
   <p>
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Cosecha</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Cosechas</a></li>
    <li><a href="#">Buscar Cosecha</a></li>
    <li><a href="{{url('/cosechas/agregar')}}">Agregar Cosecha</a></li>
    <li><a href="{{url('/cosechas/actualizar')}}">Actualizar Cosecha</a></li>
     <li><a href="{{url('/cosechas/eliminar')}}">Eliminar Cosecha</a></li>
  </ul>
  
  
      </div>
   </div>
 </div>
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/productos.png" width="" height="">
   <p>
     <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Productos</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li> <a href="{{url('/productos')}}">Obtener Productos</a></li>
    <li><a href="{{url('/productos/unico')}}">Buscar Producto</a></li>
    <li><a href="{{url('/productos/agregar')}}">Agregar Producto</a></li>
    <li><a href="{{url('/productos/actualizar')}}">Actualizar Producto</a></li>
     <li><a href="{{url('/productos/eliminar')}}">Eliminar Producto</a></li>
  </ul>
  
       
        
      </div>
   </div>
 </div>

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/suelos.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Suelo</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/suelos')}}">Obtener Suelos</a></li>
    <li><a href="{{url('/suelos/unico')}}">Buscar Suelo</a></li>
    <li><a href="{{url('/suelos/agregar')}}">Agregar Suelo</a></li>
    <li><a href="{{url('/suelos/actualizar')}}">Actualizar Suelo</a></li>
     <li><a href="{{url('/suelos/eliminar')}}">Eliminar Suelo</a></li>
  </ul>
  

         
      </div>
   </div>
 </div>
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/agregar-usuarioverde.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Usuarios</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/usuariocliente')}}">Obtener Usuarios</a></li>
    <li><a href="{{url('/usuariocliente/unico')}}">Buscar Usuario</a></li>
    <li><a href="{{url('/usuariocliente/agregar')}}">Agregar Usuario</a></li>
    <li><a href="{{url('/usuariocliente/actualizar')}}">Actualizar Usuario</a></li>
     <li><a href="{{url('/usuariocliente/eliminar')}}" >Eliminar Usuario</a></li>
  </ul>
  

      </div>
   </div>
 </div> 
 </div>

 
  <div class="container">
  <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenerrendimientocosecha.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">G. Rend. al Año</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/renanos/')}}">Obtener Rendimiento Año</a></li>
    <li><a href="{{url('/renanos/unico')}}">Buscar Rendimiento Año</a></li>
    <li><a href="{{url('/siembra/{idsiembra}/renanos/agregar')}}">Agregar Rendimiento Año</a></li>
    <li><a href="{{url('/siembra/{idsiembra}/renanos/actualizar')}}">Actualizar Rendimiento Año</a></li>
     <li><a href="{{url('/siembra/{idsiembra}/renanos/eliminar')}}" >Eliminar Rendimiento Año</a></li>
  </ul>
  

      </div>
   </div>
 </div>
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">G. CosechaSiembra</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/siembra/cosechas')}}">Obtener Cosecha-Siembra</a></li>
    <li><a href="{{url('/siembras/cosechas/unico')}}">Buscar Cosecha-Siembra</a></li>
    <li><a href="{{url('/siembras/cosechas/agregar')}}">Agregar Cosecha-Siembra</a></li>
    <li><a href="{{url('/siembras/cosechas/actualizar')}}">Actualizar Cosecha-Siembra</a></li>
     <li><a href="{{url('/siembras/cosechas/eliminar')}}" >Eliminar Cosecha-Siembra</a></li>
  </ul>
  

      </div>
   </div>
 </div>

 

  <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosnovedad.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">G. Novedades</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/producto/{idproducto}/novedades')}}">Obtener Novedad</a></li>
    <li><a href="{{url('/novedad/unico')}}">Buscar Novedad</a></li>
    <li><a href="{{url('/producto/{idproducto}/novedad/agregar')}}">Agregar Novedad</a></li>
    <li><a href="{{url('/producto/{idproducto}/novedad/actualizar')}}">Actualizar Novedad</a></li>
    <li><a href="{{url('/producto/novedad/eliminar')}}" >Eliminar Novedad</a></li>
  </ul>
  

      </div>
   </div>
 </div>
 
 
 
 </div>
 

@endsection