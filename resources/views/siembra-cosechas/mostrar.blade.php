@extends('layouts.master')

@section('contenido')		
		@if(sizeof($cosechas_siembras) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>mes_ren</th>
					<th>tipo_ren </th>
					<th>produccion_ren </th>
					<th>siembra_id  </th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cosechas_siembras as $cosecha_siembra)
				<tr>
					<td>{{$cosecha_siembra->id}}</td>
					<td>{{$cosecha_siembra->mes_ren}}</td>
					<td>{{$cosecha_siembra->tipo_ren}}</td>
					<td>{{$cosecha_siembra->produccion_ren}}</td>
					<td>{{$cosecha_siembra->siembra_id}}</td>
					<td>{{$cosecha_siembra->created_at}}</td>
					<td>{{$cosecha_siembra->updated_at}}</td>
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