@extends('layouts.master')

@section('contenido')		
		@if(sizeof($siembras) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Titulo</th>
					<th>Descripción</th>
					<th>Valor</th>
					<th>Persona</th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				@foreach($siembras as $siembra)
				<tr>
					<td>{{$siembra->id}}</td>
					<td>{{$siembra->nombre_sie}}</td>
					<td>{{$siembra->fecha_sie}}</td>
					<td>{{$siembra->numplantas_sie}}</td>
					<td>{{$siembra->area_sie}}</td>
					<td>{{$siembra->created_at}}</td>
					<td>{{$siembra->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay siembras en este momento para este persona
		</div>

		@endif
@endsection