@extends('layouts.master')

@section('contenido')

	<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id_sue</th>
					<th>Nombre_sue</th>

				></tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$suelo->Id_sue}}</td>
					<td>{{$suelo->Nombre_sue}}</td>
				</tr>
			</tbody>
		</table>	
    
		
@endsection