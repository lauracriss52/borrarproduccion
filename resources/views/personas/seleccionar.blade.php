@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/personas/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Persona</legend>
		
			<div class="form-group">
				<label for="">Persona</label>
				<select name="persona_id" id="inputCosecha_id" class="form-control" required>
                <option>Por favor elija un persona</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}">{{$persona->nombre_per}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection