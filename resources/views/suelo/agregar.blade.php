@extends('layouts.master')

@section('contenido')		
		
			<form action="{{url('/suelo/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Suelo</legend>
	
			<div class="form-group">
				<label for="">Id_sue</label>
				<input type="number" class="form-control" name="Id_sue" required>
			</div>
            
			<div class="form-group">
				<label for="">Nombre_sue</label>
				<input type="text" class="form-control" name="Nombre_sue" required>
			</div>
            
     
			<button type="submit" class="btn btn-primary">Crear Suelo</button>
		</form>

@endsection