@extends('layouts.master')
@section('contenido')
	@if(sizeof($fincas) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>nombre_fin </th>
                    <th>dapartamento_fin </th>
					<th>municipio_fin </th>
					<th>vereda_fin </th>
					<th>latitudx </th>
                    <th>latitudy </th>
                    <th>viaacc_fin </th>
                    <th>intgamilia_fin </th>
                    <th>jovenes1518 </th>
					<th>persona_id </th>
					<th>created_at </th>
                    <th>updated_at </th>
				</tr>
			</thead>
			<tbody>
				@foreach($fincas as $finca)
				<tr>
					<td>{{$finca->id}}</td>
					<td>{{$finca->nombre_fin}}</td>
					<td>{{$finca->departamento_fin}}</td>
					<td>{{$finca->vereda_fin}}</td>
					<td>{{$finca->latitud}}</td>
					<td>{{$finca->longitud}}</td>
					<td>{{$finca->viaacc_fin}}</td>
                    <td>{{$finca->intgamilia_fin}}</td>
                    <td>{{$finca->jovenes1518}}</td>
                    <td>{{$finca->persona_id}}</td>
                    <td>{{$finca->created_at}}</td>
                    <td>{{$finca->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay fincas 
		</div>

		@endif
@endsection