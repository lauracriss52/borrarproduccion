@extends('layouts.master')

@section('contenido')

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Departamento</th>
					<th>Municipio</th>
					<th>Vereda</th>
					<th>Latitud</th>
					<th>Longitud</th>
                    <th>Vias</th>
                    <th>Int. Familia</th>
                    <th>Jovenes</th>
                    <th>Propietario</th>
                    <th>Created</th>
                    <th>Updated</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$fincas->id}}</td>
                    <td>{{$fincas->nombre_fin}}</td>
                    <td>{{$fincas->departamento_fin}}</td>
                    <td>{{$fincas->municipio_fin}}</td>
                    <td>{{$fincas->vereda_fin}}</td>
                    <td>{{$fincas->latitud}}</td>
                    <td>{{$fincas->longitud}}</td>
                    <td>{{$fincas->viaacc_fin}}</td>
                    <td>{{$fincas->intgamilia_fin}}</td>
                    <td>{{$fincas->jovenes1518}}</td>
                    <td>{{$fincas->persona_id}}</td>
                    <td>{{$fincas->created_at}}</td>
                    <td>{{$fincas->updated_at}}</td>
				
				</tr>
			</tbody>
		</table>
@endsection