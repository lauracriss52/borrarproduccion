@extends('layouts.master')

@section('contenido')


	<form action="{{url('/siembra/{idsiembra}/renano/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$novedad->id}}">

			<legend>Ingrese los Datos de la Novedad</legend>
		
			
            
            	<div class="form-group">
				<label for="">tipnov_nov</label>
				<input type="date" class="form-control" name="tipnov_nov" required value="{{$novedad->tipnov_nov}}">
			</div>
            
            
			<div class="form-group">
				<label for="">camellon_nov </label>
				<input type="text" class="form-control" name="camellon_nov" required value="{{$novedad->camellon_nov}}">
			</div>
            
            
			<div class="form-group">
				<label for="">fecha_nov </label>
				<input type="text" class="form-control" name="fecha_nov" required value="{{$novedad->fecha_nov}}">
			</div>
            
            
			<div class="form-group">
				<label for="">tiempo_nov </label>
				<input type="text" class="form-control" name="tiempo_nov" required value="{{$novedad->tiempo_nov}}">
			</div>
            
            
			<div class="form-group">
				<label for="">dosis_nov </label>
				<input type="text" class="form-control" name="dosis_nov" required value="{{$novedad->dosis_nov}}">
			</div>
            
            
			<div class="form-group">
				<label for="">costopro_nov </label>
				<input type="text" class="form-control" name="costopro_nov	" required value="{{$novedad->costopro_nov}}">
			</div>
            
            
			<div class="form-group">
				<label for="">costoman_nov </label>
				<input type="text" class="form-control" name="costoman_nov" required value="{{$novedad->costoman_nov}}">
			</div>
            

			<div class="form-group">
				<label for="">operario_nov</label>
				<input type="text" class="form-control" name="operario_nov" required value="{{$novedad->operario_nov}}">
			</div>

			<div class="form-group">
				<label for="">cattoxica_nos</label>
				<input type="text" class="form-control" name="cattoxica_nov" required value="{{$novedad->cattoxica_nov}}">
			</div>

			<div class="form-group">
				<label for="">estado_nov</label>
				<input type="text" class="form-control" name="estado_nov" required value="{{$novedad->estado_nov}}">
			</div>
            
            			<div class="form-group">
				<label for="">Siembra</label>
				<input type="text" class="form-control" name="siembra_id" required value="{{$novedad->siembra_id}}">
			</div>

			<div class="form-group">
				<label for="">Producto</label>
				<input type="text" class="form-control" name="producto_id" required value="{{$novedad->siembra_id}}">
			</div>


			
            
            
          	
			<button type="submit" class="btn btn-primary">Actualizar Novedad</button>
		</form>
        
@endsection