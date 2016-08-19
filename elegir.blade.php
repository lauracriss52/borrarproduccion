@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/productos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Producto</legend>
		
			<div class="form-group">
				<label for="">Productos</label>
				<select name="productos_id" id="inputproductos_id" class="form-control" required>
                <option>Por favor elija un Producto</option>
					@foreach($productos as $productos)
					<option value="{{$productos->id}}">{{$productos->nombre_pro}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection