@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/suelo/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="Id" id="inputId" class="form-control" value="{{$suelo->Id}}">

			<legend>Ingrese los Datos del Suelo</legend>
		
		<div class="form-group">
				<label for="">Id_sue</label>
				<input type="number" class="form-control" name="Id_sue" required value="{{$suelo->id}}">
			</div>
            
			<div class="form-group">
				<label for="">Nombre_sue</label>
				<input type="text" class="form-control" name="Nombre_sue" required value="{{$suelo->Nombre_sue}}">
			</div>

			<button type="submit" class="btn btn-primary">Actualizar Suelo</button>
		</form>

@endsection