@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/producto/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$persona->id}}">

			<legend>Ingrese los Datos del Producto</legend>
		
		<div class="form-group">
				<label for="">id</label>
				<input type="text" class="form-control" name="cc_per" required value="{{$persona->cc_per}}">
			</div>
            
			<div class="form-group">
				<label for="">tipo_pro</label>
				<input type="text" class="form-control" name="nombre_per" required value="{{$persona->nombre_per}}">
			</div>
            
            <div class="form-group">
				<label for="">nombre_pro</label>
				<input type="email" class="form-control" name="correo_per" required value="{{$persona->correo_per}}">
			</div>
            
			<div class="form-group">
				<label for="">observaciones_pro</label>
				<input type="text" class="form-control" name="telefono_per" required value="{{$persona->telefono_per}}">
			</div>
            
			<div class="form-group">
				<label for="">created_at</label>
				<input type="text" class="form-control" name="direccion_per" required value="{{$persona->direccion_per}}">
			</div>
            
			<div class="form-group">
				<label for="">updated_at</label>
				<input type="text" class="form-control" name="profesion_per" required value="{{$persona->profesion_per}}">
			</div>

			<button type="submit" class="btn btn-primary">Actualizar Persona</button>
		</form>

@endsection