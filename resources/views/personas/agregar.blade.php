@extends('layouts.master')

@section('contenido')		
		
			<form action="{{url('/personas/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Persona</legend>
	
			<div class="form-group">
				<label for="">Cedula</label>
				<input type="text" class="form-control" name="cc_per" required>
			</div>
            
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre_per" required>
			</div>
            
            <div class="form-group">
				<label for="">Escriba su Correo</label>
				<input type="email" class="form-control" name="correo_per" required>
			</div>
            
			<div class="form-group">
				<label for="">Teléfono</label>
				<input type="text" class="form-control" name="telefono_per" required>
			</div>
            
			<div class="form-group">
				<label for="">Dirección</label>
				<input type="text" class="form-control" name="direccion_per" required>
			</div>
            
			<div class="form-group">
				<label for="">Profesion</label>
				<input type="text" class="form-control" name="profesion_per" required>
			</div>
            
            <div class="form-group">
				<label for="">Escriba su rol</label>
				<input type="text" class="form-control" name="rol_per" required>
			</div>
            
			<div class="form-group">
				<label for="">Cargo</label>
				<input type="text" class="form-control" name="cargo_per" required>
			</div>
            
			<div class="form-group">
				<label for="">Centro de Formación al que Pertenece</label>
				<input type="text" class="form-control" name="centroforma_per" required>
			</div>
            
			<div class="form-group">
				<label for="">Profesión</label>
				<select name="programa_per" id="programa_per" class="form-control" required>
					<option>Nombre del Programa de Formación</option>
					<option value="ingeniería">Ingeniería</option>
					<option value="matemática">Matemática</option>
					<option value="física">Física</option>
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Crear Persona</button>
		</form>

@endsection