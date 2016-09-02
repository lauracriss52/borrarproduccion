@extends('layouts.master')

@section('contenido')		
		@if(sizeof($personas) > 0)
	<form action="{{url('/persona/{idpersona}/finca/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$finca->id}}">

			<legend>Editar una Finca</legend>

			<div class="form-group">
				<label for="">nombre_fin </label>
				<input type="text" class="form-control" name="nombre_fin" required value="{{$finca->nombre_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">departamento_fin </label>
				<input type="text" class="form-control" name="departamento_fin" required value="{{$finca->departamento_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">municipio_fin </label>
				<input type="text" class="form-control" name="municipio_fin" required value="{{$finca->municipio_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">vereda_fin </label>
				<input type="text" class="form-control" name="vereda_fin" required value="{{$finca->vereda_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">latitud </label>
				<input type="text" class="form-control" name="latitud" required value="{{$finca->latitud}}">
			</div>
		
			<div class="form-group">
				<label for="">longitud </label>
				<input type="text" class="form-control" name="longitud" required value="{{$finca->longitud}}">
			</div>
		
			<div class="form-group">
				<label for="">viaacc_fin </label>
				<input type="text" class="form-control" name="viaacc_fin" required value="{{$finca->viaacc_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">intgamilia_fin </label>
				<input type="text" class="form-control" name="intgamilia_fin" required value="{{$finca->intgamilia_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">jovenes1518</label>
				<input type="text" class="form-control" name="jovenes1518" required value="{{$finca->jovenes1518}}">
			</div>
		
               
			<div class="form-group">
				<label for="">Persona</label>
				<select name="persona_id" id="inputPersona_id" class="form-control" required value="{{$finca->persona_id}}">
					<option>Seleccione un persona</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}" {{$persona->id === $finca->persona_id ? 'selected' : ''}}>{{$persona->nombre_per}}</option>
					@endforeach
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Editar Finca</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay personas en este momento para editar Finca
		</div>

		@endif
@endsection