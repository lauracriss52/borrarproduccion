@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/producto/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Producto</legend>
		
			<div class="form-group">
				<label for="">Producto</label>
				<select name="persona_id" id="inputCosecha_id" class="form-control" required>
                <option>Por favor elija un Producto</option>
					@foreach($personas as $persona)
					<option value="{{$producto->id}}">{{$producto->nombre_pro}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection