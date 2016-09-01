@extends('layouts.master')

@section('contenido')

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>ano_ren</th>
					<th>proreal_ren</th>
					<th>proesparada_ren</th>
					<th>siembra_id</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$renano->id}}</td>
                    <td>{{$renano->ano_ren}}</td>
                    <td>{{$renano->proreal_ren}}</td>
                    <td>{{$renano->proesparada_ren}}</td>
                    <td>{{$renano->siembra_id}}</td>
                    
				</tr>
			</tbody>
		</table>
@endsection