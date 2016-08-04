@extends('layouts.master')

@section('contenido')		
		@if(sizeof($personas) > 0)

		<form action="{{url('/personas/siembras/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Crear un Siembra</legend>

				<div class="form-group">
				<label for="">nombre_sie </label>
				<input type="text" class="form-control" name="nombre_sie" required>
			</div>
		
			<div class="form-group">
				<label for="">fecha_sie </label>
				<input type="date" class="form-control" name="fecha_sie" required>
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
				<label for="">Persona</label>
				<select name="persona_id" id="inputPersona_id" class="form-control" required>
					<option>Seleccione un persona</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}">{{$persona->nombre_per}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Crear Siembra</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay personas en este momento para crear un siembra
		</div>

		@endif
@endsection