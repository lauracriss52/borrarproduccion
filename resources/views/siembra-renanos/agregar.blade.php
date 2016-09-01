@extends('layouts.master')

@section('contenido')		
		@if(sizeof($siembras) > 0)

		<form action="{{url('siembras/renanos/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Crear un Año</legend>

				<div class="form-group">
				<label for="">ano_ren </label>
				<input type="text" class="form-control" name="ano_ren" required>
			</div>
		
			<div class="form-group">
				<label for="">proreal_ren </label>
				<input type="date" class="form-control" name="proreal_ren" required>
			</div>
		
			<div class="form-group">
				<label for="">proesparada_ren </label>
				<input type="text" class="form-control" name="proesparada_ren" required>
			</div>
		
			
		
		<div class="form-group">
				<label for="">Siembra</label>
				<select name="siembra_id" id="inputSiembra_id" class="form-control" required>
					<option>Seleccione un siembra</option>
					@foreach($siembras as $siembra)
					<option value="{{$siembra->id}}">{{$siembra->nombre_sie}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Crear Año</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay siembras en este momento para crear un Año
		</div>

		@endif
@endsection