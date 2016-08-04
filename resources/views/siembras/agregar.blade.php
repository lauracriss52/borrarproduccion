@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/cosechas/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Cosecha</legend>
		
			<div class="form-group">
				<label for="">nombre_sie </label>
				<input type="text" class="form-control" name="nombre_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">fecha_sie </label>
				<input type="text" class="form-control" name="fecha_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">numplantas_sie </label>
				<input type="text" class="form-control" name="numplantas_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">area_sie </label>
				<input type="text" class="form-control" name="area_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">estado_sie </label>
				<input type="text" class="form-control" name="estado_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">tiporiego_sie </label>
				<input type="text" class="form-control" name="tiporiego_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">fteagua_sie </label>
				<input type="text" class="form-control" name="fteagua_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">edad_sie </label>
				<input type="text" class="form-control" name="edad_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">distancia_sie </label>
				<input type="text" class="form-control" name="distancia_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">sanitario_sie </label>
				<input type="text" class="form-control" name="sanitario_sie" required>
			</div>

			<div class="form-group">
				<label for="">propagacion_sie </label>
				<input type="text" class="form-control" name="propagacion_sie" required>
			</div>

			<div class="form-group">
				<label for="">registro_sie </label>
				<input type="text" class="form-control" name="registro_sie" required>
			</div>

						<div class="form-group">
				<label for="">suelo_sie  </label>
				<input type="text" class="form-control" name="suelo_sie" required>
			</div>
			<div class="form-group">
				<label for="">cultivo_sie  </label>
				<input type="text" class="form-control" name="cultivo_sie" required>
			</div>
			<div class="form-group">
				<label for="">registro_sie </label>
				<input type="text" class="form-control" name="registro_sie" required>
			</div>
			<div class="form-group">
				<label for="">persona_id </label>
				<input type="text" class="form-control" name="persona_id" required>
			</div>
	
		
			<button type="submit" class="btn btn-primary">Crear Cosecha</button>
		</form>

@endsection