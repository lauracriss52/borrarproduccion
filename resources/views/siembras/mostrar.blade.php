@extends('layouts.master')

@section('contenido')

<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Titulo</th>
					<th>Descripción</th>
					<th>Valor</th>
					<th>Persona</th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$siembra->id}}</td>
					<td>{{$siembra->nombre_sie}}</td>
					<td>{{$siembra->fecha_sie}}</td>
					<td>{{$siembra->numplantas_sie}}</td>
					<td>{{$siembra->area_sie}}</td>
					<td>{{$siembra->created_at}}</td>
					<td>{{$siembra->updated_at}}</td>
				</tr>
			</tbody>
		</table>
@endsection