@extends('layouts.master')
@section('contenido')
	@if(sizeof($usuariocliente) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>secret</th>
					<<th>name</th>
					<th>created_at</th>
                    <th>updated_at</th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuariocliente as $usuariocliente)
				<tr>
					<td>{{$usuariocliente->id}}</td>
					<td>{{$usuariocliente->secret}}</td>
					<td>{{$usuariocliente->name}}</td>
					<td>{{$usuariocliente->created_at}}</td>
                    <td>{{$usuariocliente->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay usuarios en este momento
		</div>

		@endif
@endsection