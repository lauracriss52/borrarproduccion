@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/personas/siembras/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Siembra</legend>
		
			<div class="form-group">
				<label for="">Siembra</label>
				<select name="siembra_id" id="inputSiembra_id" class="form-control" required>
                <option>Por favor elija un siembra</option>
					@foreach($siembras as $siembra)
					<option value="{{$siembra->id}}">{{$siembra->nombre_sie}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection