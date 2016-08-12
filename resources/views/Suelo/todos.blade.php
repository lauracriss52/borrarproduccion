@extends('layouts.master')
@section('contenido')
	@if(sizeof($suelo) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id_sue</th>
					<th>Nombre_sue</th>
				</tr>
			</thead>
			<tbody>
				@foreach($suelo as $suelos)
				<tr>
					<td>{{$suelo->Id_sue}}</td>
					<td>{{$suelo->Nombre_sue}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay suelo en este momento
		</div>

		@endif
@endsection