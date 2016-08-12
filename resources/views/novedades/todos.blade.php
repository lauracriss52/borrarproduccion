@extends('layouts.master')
@section('contenido')
	@if(sizeof($novedades) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>tipnov_nov </th>
                    <th>camellon_nov </th>
					<th>fecha_nov </th>
					<th>producto_nov </th>
					<th>tiempo_nov </th>
                    <th>dosis_nov </th>
                    <th>costopro_nov </th>
                    <th>costoman_nov </th>
                    <th>operario_nov </th>
					<th>cattoxica_nov </th>
					<th>estado_nov </th>
                    <th>siembra_id </th>
                    <th>created_at </th>
                    <th>updated_at </th>
				</tr>
			</thead>
			<tbody>
				@foreach($novedades as $fnovedades)
				<tr>
					<td>{{$novedad->id}}</td>
                    <td>{{$novedad->tipnov_nov}}</td>
                    <td>{{$novedad->camellon_nov}}</td>
                    <td>{{$novedad->fecha_nov}}</td>
                    <td>{{$novedad->producto_nov}}</td>
                    <td>{{$novedad->tiempo_nov}}</td>
                    <td>{{$novedad->dosis_nov}}</td>
                    <td>{{$novedad->costopro_nov}}</td>
                    <td>{{$novedad->costoman_nov}}</td>
                    <td>{{$novedad->operario_nov}}</td>
                    <td>{{$novedad->cattoxica_nov}}</td>
                    <td>{{$novedad->estado_nov}}</td>
                    <td>{{$novedad->siembra_id}}</td>
                    <td>{{$novedad->created_at}}</td>
                    <td>{{$novedad->updated_at}}</td>
                    
					
                    
				
					
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay novedades
		</div>

		@endif
@endsection