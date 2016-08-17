@extends('layouts.master')

@section('contenido')

	<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>tipo_pro</th>
					<th>nombre_pro </th>
					<th>observaciones_pro</th>
                    <th>created_at</th>
                    <th>updated_at</th
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$producto->id}}</td>
					<td>{{$producto->tipo_pro}}</td>
					<td>{{$producto->nombre_pro}}</td>
					<td>{{$producto->observaciones_pro}}</td>
                    <td>{{$producto->created_at}}</td>
                    <td>{{$producto->updated_at}}</td>
				</tr>
			</tbody>
		</table>	
        
        
@endsection