@extends('layouts.master')

@section('contenido')

	<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Profesión</th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$persona->id}}</td>
					<td>{{$persona->cc_per}}</td>
					<td>{{$persona->nombre_per}}</td>
					<td>{{$persona->correo_per}}</td>
					<td>{{$persona->telefono_per}}</td>
					<td>{{$persona->created_at}}</td>
					<td>{{$persona->updated_at}}</td>
				</tr>
			</tbody>
		</table>	
        
        
@endsection