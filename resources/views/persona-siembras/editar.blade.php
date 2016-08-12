@extends('layouts.master')

@section('contenido')		
		@if(sizeof($personas) > 0)

		<form action="{{url('/personas/siembras/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			{{method_field('PUT')}}

			<input type="hidden" name="siembra_id" id="inputId" class="form-control" value="{{$siembra->id}}">

			<legend>Editar un Siembra</legend>

			<div class="form-group">
				<label for="">nombre_sie </label>
				<input type="text" class="form-control" name="nombre_sie" required value="{{$siembra->nombre_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">fecha_sie </label>
				<input type="date" class="form-control" name="fecha_sie" required value="{{$siembra->fecha_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">numplantas_sie </label>
				<input type="text" class="form-control" name="numplantas_sie" required value="{{$siembra->numplantas_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">area_sie </label>
				<input type="text" class="form-control" name="area_sie" required value="{{$siembra->area_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">estado_sie </label>
				<input type="text" class="form-control" name="estado_sie" required value="{{$siembra->estado_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">tiporiego_sie </label>
				<input type="text" class="form-control" name="tiporiego_sie" required value="{{$siembra->tiporiego_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">fteagua_sie </label>
				<input type="text" class="form-control" name="fteagua_sie" required value="{{$siembra->fteagua_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">edad_sie </label>
				<input type="text" class="form-control" name="edad_sie" required value="{{$siembra->edad_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">distancia_sie </label>
				<input type="text" class="form-control" name="distancia_sie" required value="{{$siembra->distancia_sie}}">
			</div>
		
			<div class="form-group">
				<label for="">sanitario_sie </label>
				<input type="text" class="form-control" name="sanitario_sie" required value="{{$siembra->sanitario_sie}}">
			</div>

			<div class="form-group">
				<label for="">propagacion_sie </label>
				<input type="text" class="form-control" name="propagacion_sie" required value="{{$siembra->propagacion_sie}}">
			</div>

			<div class="form-group">
				<label for="">registro_sie </label>
				<input type="text" class="form-control" name="registro_sie" required value="{{$siembra->registro_sie}}">
			</div>

				<div class="form-group">
				<label for="">suelo_sie  </label>
				<input type="text" class="form-control" name="suelo_sie" required value="{{$siembra->suelo_sie}}">
			</div>
			<div class="form-group">
				<label for="">cultivo_sie  </label>
				<input type="text" class="form-control" name="cultivo_sie" required value="{{$siembra->cultivo_sie}}">
			</div>
			<div class="form-group">
				<label for="">registro_sie </label>
				<input type="text" class="form-control" name="registro_sie" required value="{{$siembra->registro_sie}}">
			</div>
               
			<div class="form-group">
				<label for="">Persona</label>
				<select name="persona_id" id="inputPersona_id" class="form-control" required value="{{$siembra->persona_id}}">
					<option>Seleccione un persona</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}" {{$persona->id === $siembra->persona_id ? 'selected' : ''}}>{{$persona->nombre_per}}</option>
					@endforeach
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Editar Siembra</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay personas en este momento para editar un siembra
		</div>

		@endif
@endsection