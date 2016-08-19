@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/productos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$productos->id}}">

			<legend>Ingrese los Datos del Producto</legend>
		
		<div class="form-group">
				<label for="">id</label>
				<input type="number" class="form-control" name="id" required value="{{$productos->id}}">
			</div>
            
			<div class="form-group">
				<label for="">tipo_pro</label>
				<input type="number" class="form-control" name="tipo_pro" required value="{{$productos->tipo_pro}}">
			</div>
            
            <div class="form-group">
				<label for="">nombre_pro</label>
				<input type="text" class="form-control" name="nombre_pro" required value="{{$productos->nombre_pro}}">
			</div>
            
			<div class="form-group">
				<label for="">observaciones_pro</label>
				<input type="text" class="form-control" name="observaciones_pro" required value="{{$productos->observaciones_pro}}">
			</div>
           

			<button type="submit" class="btn btn-primary">Actualizar Persona</button>
		</form>

@endsection