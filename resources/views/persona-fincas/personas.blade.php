@extends('layouts.master')

@section('contenido')		
		@if(sizeof($personas) > 0)

		<form action="{{url('/personas/fincas')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione un Persona</legend>
		
			<div class="form-group">
				<label for="">Persona</label>
				<select name="persona_id" id="inputPersona_id" class="form-control" required>
					<option>Seleccione un persona</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}">{{$persona->nombre_per}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Obtener Finca</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay personas en este momento
		</div>

		@endif
@endsection