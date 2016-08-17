@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/fincas/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija una Finca</legend>
		
			<div class="form-group">
				<label for="">Finca</label>
				<select name="finca_id" id="inputFinca_id" class="form-control" required>
                <option>Por favor elija una Finca</option>
					@foreach($finca as $finca)
					<option value="{{$finca->id}}">{{$finca->municipio_fin}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection