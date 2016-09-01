@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/renanos/unico')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese el Id de la Año de rendimiento</legend>
		
			<div class="form-group">
				<label for="">Id</label>
				<input type="number" class="form-control" name="id" required>
			</div>
			<button type="submit" class="btn btn-primary">Obtener</button>
		</form>

@endsection