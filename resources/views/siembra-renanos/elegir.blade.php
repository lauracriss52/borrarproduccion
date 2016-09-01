@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/renanos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija una Año</legend>
		
			<div class="form-group">
				<label for="">Año</label>
				<select name="finca_id" id="inputRenano_id" class="form-control" required>
                <option>Por favor elija una Año</option>
					@foreach($renanos as $renano)
					<option value="{{$renano->id}}">{{$renoa->ano_ren}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection