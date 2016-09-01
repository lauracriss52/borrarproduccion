@extends('layouts.master')

@section('contenido')		
		
             <form action="{{url('/renanos/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un </legend>
		
			<div class="form-group">
				<label for="">Año</label>
				<select name="renano_id" id="inputRenano_id" class="form-control" required>
                <option>Por favor elija un Año</option>
					@foreach($renanos as $renano)
					<option value="{{$renano->id}}">{{$renano->ano_ren}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection