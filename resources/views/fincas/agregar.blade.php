@extends('layouts.master')

@section('contenido')	
@if(sizeof($personas) > 0)	
		
		<form action="{{url('/fincas/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos de la Finca</legend>
		
			<div class="form-group">
				<label for="">nombre_fin </label>
				<input type="date" class="form-control" name="	nombre_fin" required>
			</div>
            
            
			<div class="form-group">
				<label for="">departamento_fin </label>
				<input type="text" class="form-control" name="departamento_fin" required>
			</div>
            
            
			<div class="form-group">
				<label for="">municipio_fin </label>
				<input type="text" class="form-control" name="municipio_fin" required>
			</div>
            
            
			<div class="form-group">
				<label for="">vereda_fin </label>
				<input type="text" class="form-control" name="vereda_fin" required>
			</div>
            
            
			<div class="form-group">
				<label for="">latitud </label>
				<input type="text" class="form-control" name="latitud" required>
			</div>
            
            
			<div class="form-group">
				<label for="">longitud </label>
				<input type="text" class="form-control" name="longitud" required>
			</div>
            
            
			<div class="form-group">
				<label for="">viaacc_fin </label>
				<input type="text" class="form-control" name="viaacc_fin" required>
			</div>
            

			<div class="form-group">
				<label for="">intgamilia_fin</label>
				<input type="text" class="form-control" name="intgamilia_fin" required>
			</div>

			<div class="form-group">
				<label for="">jovenes1518</label>
				<input type="text" class="form-control" name="jovenes1518" required>
			</div>
            <div class="form-group">
				<label for="">Persona</label>
				<select name="persona_id" id="inputPersona_id" class="form-control" required>
					<option>Seleccione una persona</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}">{{$persona->nombre_per}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="">created_at</label>
				<input type="text" class="form-control" name="pro_esp_cos" required>
			</div>

			<div class="form-group">
				<label for="">updated_at</label>
				<input type="text" class="form-control" name="prototal_cos" required>
			</div>
		
			<button type="submit" class="btn btn-primary">Crear Finca</button>
		</form>

@endsection