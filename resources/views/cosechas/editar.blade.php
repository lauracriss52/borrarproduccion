@extends('layouts.master')

@section('contenido')

	<form action="{{url('/cosechas/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$cosecha->id}}">

			<legend>Ingrese los Datos del Cosecha</legend>
		
			
            
            	<div class="form-group">
				<label for="">fecha_cos</label>
				<input type="date" class="form-control" name="fecha_cos" required value="{{$cosecha->fecha_cos}}">
			</div>
            
            
			<div class="form-group">
				<label for="">kilosp_cos </label>
				<input type="text" class="form-control" name="kilosp_cos" required value="{{$cosecha->kilosp_cos}}">
			</div>
            
            
			<div class="form-group">
				<label for="">Kiloss_cos </label>
				<input type="text" class="form-control" name="Kiloss_cos" required value="{{$cosecha->Kiloss_cos}}">
			</div>
            
            
			<div class="form-group">
				<label for="">kiloster_cos </label>
				<input type="text" class="form-control" name="kiloster_cos" required value="{{$cosecha->kiloster_cos}}">
			</div>
            
            
			<div class="form-group">
				<label for="">kilosdes_cos </label>
				<input type="text" class="form-control" name="kilosdes_cos" required value="{{$cosecha->kilosdes_cos}}">
			</div>
            
            
			<div class="form-group">
				<label for="">Kilosto_cos </label>
				<input type="text" class="form-control" name="Kilosto_cos" required value="{{$cosecha->Kilosto_cos}}">
			</div>
            
            
			<div class="form-group">
				<label for="">Horas_cos </label>
				<input type="text" class="form-control" name="Horas_cos" required value="{{$cosecha->Horas_cos}}">
			</div>
            

			<div class="form-group">
				<label for="">destino_cos</label>
				<input type="text" class="form-control" name="destino_cos" required value="{{$cosecha->destino_cos}}">
			</div>

			<div class="form-group">
				<label for="">observaciones_cos</label>
				<input type="text" class="form-control" name="observaciones_cos" required value="{{$cosecha->observaciones_cos}}">
			</div>

			<div class="form-group">
				<label for="">pro_esp_cos</label>
				<input type="text" class="form-control" name="pro_esp_cos" required value="{{$cosecha->pro_esp_cos}}">
			</div>

			<div class="form-group">
				<label for="">prototal_cos</label>
				<input type="text" class="form-control" name="prototal_cos" required value="{{$cosecha->prototal_cos}}">
			</div>
            
            
          	
			<button type="submit" class="btn btn-primary">Actualizar Cosecha</button>
		</form>
        
@endsection