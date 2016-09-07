@extends('layouts.master')

@section('contenido')		
		
<form action="{{url('/suelo/unico')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese el Id del Suelo</legend>
		
			<div class="form-group">
				<label for="">Id_sue</label>
				<input type="number" class="form-control" name="Id_sue" required>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Obtener</button>
		</form>


@endsection