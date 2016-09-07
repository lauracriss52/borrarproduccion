@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/suelo/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Suelo</legend>
		
			<div class="form-group">
				<label for="">Suelo</label>
				<select name="suelo_Id_sue" id="inputsuelo_Id_sue" class="form-control" required>
                <option>Por favor elija un Suelo</option>
					@foreach($suelo as $suelo)
					<option value="{{$suelo->Id_sue}}">{{$suelo->Nombre_sue}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection