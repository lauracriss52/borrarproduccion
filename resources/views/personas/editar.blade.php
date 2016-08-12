@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/personas/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$persona->id}}">

			<legend>Ingrese los Datos del Persona</legend>
		
		<div class="form-group">
				<label for="">Cedula</label>
				<input type="text" class="form-control" name="cc_per" required value="{{$persona->cc_per}}">
			</div>
            
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre_per" required value="{{$persona->nombre_per}}">
			</div>
            
            <div class="form-group">
				<label for="">Escriba su Correo</label>
				<input type="email" class="form-control" name="correo_per" required value="{{$persona->correo_per}}">
			</div>
            
			<div class="form-group">
				<label for="">Teléfono</label>
				<input type="text" class="form-control" name="telefono_per" required value="{{$persona->telefono_per}}">
			</div>
            
			<div class="form-group">
				<label for="">Dirección</label>
				<input type="text" class="form-control" name="direccion_per" required value="{{$persona->direccion_per}}">
			</div>
            
			<div class="form-group">
				<label for="">Profesion</label>
				<input type="text" class="form-control" name="profesion_per" required value="{{$persona->profesion_per}}">
			</div>
            
            <div class="form-group">
				<label for="">Escriba su rol</label>
				<input type="text" class="form-control" name="rol_per" required value="{{$persona->rol_per}}">
			</div>
            
			<div class="form-group">
				<label for="">Cargo</label>
				<input type="text" class="form-control" name="cargo_per" required value="{{$persona->cargo_per}}">
			</div>
            
			<div class="form-group">
				<label for="">Centro de Formación al que Pertenece</label>
				<input type="text" class="form-control" name="centroforma_per" required value="{{$persona->centroforma_per}}">
			</div>
            
			<div class="form-group">
				<label for="">Profesión</label>
				<select name="programa_per" id="programa_per" class="form-control" required="required">
					<option>Por favor seleccione una profesion</option>
					<option value="ingeniería" {{$persona->programa_per == 'ingeniería'?'selected':''}}>Ingeniería</option>
					<option value="matemática" {{$persona->programa_per == 'matemática'?'selected':''}}>Matemática</option>
					<option value="física" {{$persona->programa_per == 'física'?'selected':''}}>Física</option>
				</select>
			</div>
        
		
		
			<button type="submit" class="btn btn-primary">Actualizar Persona</button>
		</form>

@endsection