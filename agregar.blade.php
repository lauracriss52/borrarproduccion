@extends('layouts.master')

@section('contenido')		
		
			<form action="{{url('/productos/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Producto</legend>
	
			<div class="form-group">
				<label for="">id</label>
				<input type="number" class="form-control" name="id" required>
			</div>
            
			<div class="form-group">
				<label for="">tipo_pro</label>
				<input type="number" class="form-control" name="tipo_pro" required>
			</div>
            
            <div class="form-group">
				<label for="">nombre_pro</label>
				<input type="text" class="form-control" name="nombre_pro" required>
			</div>
            
			<div class="form-group">
				<label for="">observaciones_pro</label>
				<input type="text" class="form-control" name="observaciones_pro" required>
			</div>
     
			<button type="submit" class="btn btn-primary">Crear Producto</button>
		</form>

@endsection