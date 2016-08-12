@extends('layouts.master')
@section('contenido')
	@if(sizeof($personas) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>cc_per </th>
					<th>nombre_per </th>
					<th>correo_per </th>
					<th>telefono_per </th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				@foreach($personas as $persona)
				<tr>
					<td>{{$persona->id}}</td>
					<td>{{$persona->cc_per}}</td>
					<td>{{$persona->nombre_per}}</td>
					<td>{{$persona->telefono_per}}</td>
					<td>{{$persona->profesion_per}}</td>
					<td>{{$persona->created_at}}</td>
					<td>{{$persona->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay personas en este momento
		</div>

		@endif
@endsection