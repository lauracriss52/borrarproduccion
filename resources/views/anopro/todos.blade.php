@extends('layouts.master')
@section('contenido')
	@if(sizeof($anopros) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Id_sie_ano </th>
                    <th>Ano_ano </th>
					<th>Proreal_ano </th>
					<th>Proesperda_ano </th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($anopros as $anopros)
				<tr>
					<td>{{$anopro->id}}</td>
                    <td>{{$anopro->Id_sie_ano}}</td>
                    <td>{{$anopro->Ano_ano}}</td>
                    <td>{{$anopro->Proreal_ano}</td>
                    <td>{{$anopro->Proesperda_ano}}</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay produccion este año  
		</div>

		@endif
@endsection