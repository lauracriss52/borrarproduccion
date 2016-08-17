@extends('layouts.master')

@section('contenido')		
		
			<form action="{{url('/producto/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Producto</legend>
	
			<div class="form-group">
				<label for="">id</label>
				<input type="text" class="form-control" name="cc_per" required>
			</div>
            
			<div class="form-group">
				<label for="">tipo_pro</label>
				<input type="text" class="form-control" name="nombre_per" required>
			</div>
            
            <div class="form-group">
				<label for="">nombre_pro</label>
				<input type="text" class="form-control" name="correo_per" required>
			</div>
            
			<div class="form-group">
				<label for="">observaciones_pro</label>
				<input type="text" class="form-control" name="telefono_per" required>
			</div>
            
			<div class="form-group">
				<label for="">created_pro</label>
				<input type="text" class="form-control" name="direccion_per" required>
			</div>
            
			<div class="form-group">
				<label for="">updated_at</label>
				<input type="text" class="form-control" name="profesion_per" required>
			</div>
     
			<button type="submit" class="btn btn-primary">Crear Producto</button>
		</form>

@endsection