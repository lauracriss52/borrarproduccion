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
                    <th>updated_at</th>
				></tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$productos->id}}</td>
					<td>{{$productos->tipo_pro}}</td>
					<td>{{$productos->nombre_pro}}</td>
					<td>{{$productos->observaciones_pro}}</td>
                    <td>{{$productos->created_at}}</td>
                    <td>{{$productos->updated_at}}</td>
				</tr>
			</tbody>
		</table>	
    
		
@endsection