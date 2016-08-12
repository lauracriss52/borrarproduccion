@extends('layouts.master')
@section('contenido')
	@if(sizeof($cosechas) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>fecha de cosecha</th>
					<th>kilosp_cos </th>
					<th>Kiloss_cos </th>
					<th>kiloster_cos </th>
					<th>kilosdes_cos </th>
					<th>Kilosto_cos </th>
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
					<td>{{$cosecha->kilosdes_cos}}</td>
					<td>{{$cosecha->Kilosto_cos}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay cosechas en este momento
		</div>

		@endif
@endsection