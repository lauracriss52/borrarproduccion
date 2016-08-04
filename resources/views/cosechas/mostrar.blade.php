@extends('layouts.master')

@section('contenido')

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Carrera</th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$cosecha->id}}</td>
					<td>{{$cosecha->fecha_cos}}</td>
					<td>{{$cosecha->kilosp_cos}}</td>
					<td>{{$cosecha->Kiloss_cos}}</td>
					<td>{{$cosecha->kiloster_cos}}</td>
					<td>{{$cosecha->created_at}}</td>
					<td>{{$cosecha->updated_at}}</td>
				</tr>
			</tbody>
		</table>
@endsection