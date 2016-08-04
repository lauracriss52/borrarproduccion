@extends('layouts.master')

@section('contenido')		
		@if(sizeof($siembras) > 0)
		@if(sizeof($cosechas) > 0)

		<form action="{{url('/siembras/cosechas/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione un Siembra y un Cosecha</legend>
		
			<div class="form-group">
				<label for="">Siembra</label>
				<select name="siembra_id" id="inputSiembra_id" class="form-control" required>
					<option>Seleccione un siembra</option>
					@foreach($siembras as $siembra)
					<option value="{{$siembra->id}}">{{$siembra->nombre_sie}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="">Cosecha</label>
				<select name="cosecha_id" id="inputCosecha_id" class="form-control" required>
					<option>Seleccione un cosecha</option>
					@foreach($cosechas as $cosecha)
					<option value="{{$cosecha->id}}">{{$cosecha->fecha_cos}}</option>
					@endforeach
				</select>
			</div>
            
            	
			<div class="form-group">
				<label for="">mes_ren </label>
				<select name="mes_ren" id="mes_ren" class="form-control" required>
					<option>Seleccione un mes</option>
					<option value="enero">Enero</option>
					<option value="febrero">Febrero</option>
					<option value="marzo">Marzo</option>
					<option value="abril">Abril</option>
					<option value="mayo">Mayo</option>
					<option value="junio">Junio</option>
					<option value="julio">Julio</option>
					<option value="agosto">Agosto</option>
					<option value="septiembre">Septiembre</option>
					<option value="octubre">Octubre</option>
					<option value="noviembre">Noviembre</option>
					<option value="diciembre">Diciembre</option>
				</select>
			</div>
		

            	
			<div class="form-group">
				<label for="">tipo_ren </label>
				<input type="text" class="form-control" name="tipo_ren" required>
			</div>
		

            	
			<div class="form-group">
				<label for="">produccion_ren </label>
				<input type="text" class="form-control" name="produccion_ren" required>
			</div>
		
			<button type="submit" class="btn btn-primary">Agregar Cosecha al Siembra</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay cosechas en este momento
		</div>

		@endif

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay siembras en este momento
		</div>

		@endif
@endsection