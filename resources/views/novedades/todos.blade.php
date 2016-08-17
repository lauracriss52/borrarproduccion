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
				@foreach($novedades as $novedades)
				<tr>
					<td>{{$novedades->id}}</td>
                    <td>{{$novedades->tipnov_nov}}</td>
                    <td>{{$novedades->camellon_nov}}</td>
                    <td>{{$novedades->fecha_nov}}</td>
                    <td>{{$novedades->producto_nov}}</td>
                    <td>{{$novedades->tiempo_nov}}</td>
                    <td>{{$novedades->dosis_nov}}</td>
                    <td>{{$novedades->costopro_nov}}</td>
                    <td>{{$novedades->costoman_nov}}</td>
                    <td>{{$novedades->operario_nov}}</td>
                    <td>{{$novedades->cattoxica_nov}}</td>
                    <td>{{$novedades->estado_nov}}</td>
                    <td>{{$novedades->siembra_id}}</td>
                    <td>{{$novedades->created_at}}</td>
                    <td>{{$novedades->updated_at}}</td>
                    
					
                    
				
					
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