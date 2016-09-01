@extends('layouts.master')

@section('contenido')		
		@if(sizeof($productos) > 0)

		<form action="{{url('/productos/novedades')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione un Persona</legend>
		
			<div class="form-group">
				<label for="">Productos</label>
				<select name="producto_id" id="inputProducto_id" class="form-control" required>
					<option>Seleccione un producto</option>
					@foreach($productos as $producto)
					<option value="{{$producto->id}}">{{$producto->tipo_pro}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Obtener Finca</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay productos en este momento
		</div>

		@endif
@endsection