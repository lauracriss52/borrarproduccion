@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/producto/novedad/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Novedad</legend>
		
			<div class="form-group">
				<label for="">Novedad </label>
				<select name="novedad_id" id="inputidNovedad" class="form-control" required>
                <option>Por favor elija un novedad</option>
					@foreach($novedades as $novedad)
					<option value="{{$novedad->id}}">{{$novedad->tipnov_nov}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection