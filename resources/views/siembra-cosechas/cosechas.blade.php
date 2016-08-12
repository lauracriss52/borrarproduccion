@extends('layouts.master')

@section('contenido')		
		@if(sizeof($cosechas) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>kilosp_cos </th>
					<th>Kiloss_cos</th>
					<th>kiloster_cos </th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cosechas as $cosecha)
				<tr>
					<td>{{$cosecha->id}}</td>
					<td>{{$cosecha->fecha_cos}}</td>
					<td>{{$cosecha->kilosp_cos}}</td>
					<td>{{$cosecha->Kiloss_cos}}</td>
					<td>{{$cosecha->kiloster_cos}}</td>
					<td>{{$cosecha->created_at}}</td>
					<td>{{$cosecha->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay cosechas en el siembra seleccionado
		</div>

		@endif
@endsection