@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/cosechas/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
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
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection