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
					<td>{{$renanos->id}}</td>
                    <td>{{$renanos->ano_ren}}</td>
                    <td>{{$renanos->proreal_ren}}</td>
                    <td>{{$renanos->proesparada_ren}}</td>
                    <td>{{$renanos->siembra_id}}</td>
                    
				</tr>
			</tbody>
		</table>
@endsection