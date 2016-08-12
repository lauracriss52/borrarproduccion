@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/siembras/cosechas/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			{{method_field('DELETE')}}

			<input type="hidden" name="siembra_id" id="inputId" class="form-control" value="{{$siembraId}}">

			<legend>Elija un Cosecha</legend>
		
			<div class="form-group">
				<label for="">Cosecha</label>
				<select name="cosecha_id" id="inputCosecha_id" class="form-control" required>
                <option>Por favor elija un cosecha</option>
					@foreach($cosechas as $cosecha)
					<option value="{{$cosecha->id}}">{{$cosecha->fecha_cos}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar Cosecha del Siembra</button>
		</form>

@endsection