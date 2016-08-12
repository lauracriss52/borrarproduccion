@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/cosechas/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Cosecha</legend>
		
			<div class="form-group">
				<label for="">fecha_cos</label>
				<input type="date" class="form-control" name="fecha_cos" required>
			</div>
            
            
			<div class="form-group">
				<label for="">kilosp_cos </label>
				<input type="text" class="form-control" name="kilosp_cos" required>
			</div>
            
            
			<div class="form-group">
				<label for="">Kiloss_cos </label>
				<input type="text" class="form-control" name="Kiloss_cos" required>
			</div>
            
            
			<div class="form-group">
				<label for="">kiloster_cos </label>
				<input type="text" class="form-control" name="kiloster_cos" required>
			</div>
            
            
			<div class="form-group">
				<label for="">kilosdes_cos </label>
				<input type="text" class="form-control" name="kilosdes_cos" required>
			</div>
            
            
			<div class="form-group">
				<label for="">Kilosto_cos </label>
				<input type="text" class="form-control" name="Kilosto_cos" required>
			</div>
            
            
			<div class="form-group">
				<label for="">Horas_cos </label>
				<input type="text" class="form-control" name="Horas_cos" required>
			</div>
            

			<div class="form-group">
				<label for="">destino_cos</label>
				<input type="text" class="form-control" name="destino_cos" required>
			</div>

			<div class="form-group">
				<label for="">observaciones_cos</label>
				<input type="text" class="form-control" name="observaciones_cos" required>
			</div>

			<div class="form-group">
				<label for="">pro_esp_cos</label>
				<input type="text" class="form-control" name="pro_esp_cos" required>
			</div>

			<div class="form-group">
				<label for="">prototal_cos</label>
				<input type="text" class="form-control" name="prototal_cos" required>
			</div>
		
			<button type="submit" class="btn btn-primary">Crear Cosecha</button>
		</form>

@endsection