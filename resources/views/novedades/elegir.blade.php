@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/novedad/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Novedad</legend>
		
			<div class="form-group">
				<label for="">Novedad</label>
				<select name="novedad_id" id="inputidNovedad" class="form-control" required>
                <option>Por favor elija un novedad</option>
					@foreach($novedad as $novedad)
					<option value="{{$novedad->id}}">{{$novedad->tipnov_nov}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection