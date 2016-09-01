@extends('layouts.master')

@section('contenido')		
@if(sizeof($siembras) > 0)
@if(sizeof($productos) > 0)
		
		<form action="{{url('productos/novedades/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos de la Novedad</legend>
		
			<div class="form-group">
				<label for="">tipnov_nov</label>
				<input type="date" class="form-control" name="tipnov_nov" required>
			</div>
            
            
			<div class="form-group">
				<label for="">camellon_nov </label>
				<input type="text" class="form-control" name="camellon_nov" required>
			</div>
            
            
			<div class="form-group">
				<label for="">fecha_nov </label>
				<input type="text" class="form-control" name="fecha_nov" required>
			</div>
            
            
			<div class="form-group">
				<label for="">tiempo_nov </label>
				<input type="text" class="form-control" name="tiempo_nov" required>
			</div>
            
            
			<div class="form-group">
				<label for="">dosis_nov </label>
				<input type="text" class="form-control" name="dosis_nov" required>
			</div>
            
            
			<div class="form-group">
				<label for="">costopro_nov </label>
				<input type="text" class="form-control" name="costopro_nov" required>
			</div>
            
            
			<div class="form-group">
				<label for="">costoman_nov </label>
				<input type="text" class="form-control" name="costoman_nov" required>
			</div>
            

			<div class="form-group">
				<label for="">operario_nov</label>
				<input type="text" class="form-control" name="operario_nov" required>
			</div>

			<div class="form-group">
				<label for="">cattoxica_nov</label>
				<input type="text" class="form-control" name="cattoxica_nov" required>
			</div>

			<div class="form-group">
				<label for="">estado_nov</label>
				<input type="text" class="form-control" name="estado_nov" required>
			</div>
            			<div class="form-group">
				<label for="">Siembra</label>
				<select name="siembra_id" id="inputSiembra_id" class="form-control" required>
					<option>Seleccione una Siembra</option>
					@foreach($siembra as $siembra)
					<option value="{{$siembra->id}}">{{$siembra->nombre_sie}}</option>
					@endforeach
                    
				</select>
                </div>
                <div class="form-group">
				<label for="">Producto</label>
				<select name="producto_id" id="inputProducto_id" class="form-control" required>
					<option>Seleccione un Producto</option>
					@foreach($producto as $producto)
					<option value="{{$producto->id}}">{{$producto->tipo_pro}}</option>
					@endforeach
				</select>
			</div>

	
		
					<button type="submit" class="btn btn-primary">Crear Novedad</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay productos o siembras en este momento para crear una Novedad
		</div>

		@endif
@endsection