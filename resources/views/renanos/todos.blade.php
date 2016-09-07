@extends('layouts.master')
@section('contenido')
	@if(sizeof($renanos) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>ano_ren </th>
                    <th>proreal_ren </th>
					<th>proesparada_ren	 </th>
					<th>siembra_id </th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($renanos as $renano)
				<tr>
					<td>{{$renano->id}}</td>
                    <td>{{$renano->ano_ren}}</td>
                    <td>{{$renano->proreal_ren}}</td>
                    <td>{{$renano->proesparada_ren}}</td>
                    <td>{{$renano->siembra_id}}</td>
				
				
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay años de produccion 
		</div>

		@endif
@endsection