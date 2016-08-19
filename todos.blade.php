@extends('layouts.master')
@section('contenido')
	@if(sizeof($productos) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>tipo_pro</th>
					<th>nombre_pro </th>
					<th>observaciones_pro</th>
                    <th>created_at</th>
                    <th>updated_at</th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
				<tr>
					<td>{{$producto->id}}</td>
					<td>{{$producto->tipo_pro}}</td>
					<td>{{$producto->nombre_pro}}</td>
					<td>{{$producto->observaciones_pro}}</td>
                    <td>{{$producto->created_at}}</td>
                    <td>{{$producto->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay productos en este momento
		</div>

		@endif
@endsection