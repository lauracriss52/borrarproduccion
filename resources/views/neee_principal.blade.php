@extends('layouts.master')
@section('contenido')

    <div class="list-group">
        <a href="{{url('/siembras')}}" class="list-group-item">Obtener Todos los Cultivos de guayaba </a>
        <a href="{{url('/personas')}}" class="list-group-item">Obtener Todos los Productores </a>
        <a href="{{url('/cosechas')}}" class="list-group-item">Obtener Todas las Cosechas </a>
    </div>
    
    <div class="list-group">
        <a href="#" class="list-group-item"> consultar un Cultivo</a>
        <a href="#" class="list-group-item"> consultar un Productor</a>
        <a href="#" class="list-group-item"> consultar la Cosecha por mes</a>
    </div>
@endsection