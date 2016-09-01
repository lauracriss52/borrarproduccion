@extends('layouts.master')

@section('contenido')

	<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Tipo Novedad</th>
					<th>Camellon</th>
					<th>Fecha_nov</th>
					<th>Tiempo</th>
					<th>Dosis</th>
					<th>CostoPro</th>
                    <th>CostoMan</th>
                    <th>Operario</th>
                    <th>CatToxica</th>
                    <th>Estado</th>
                    <th>Siembra</th>
                    <th>Producto</th>
                    <th>Created</th>
                    <th>updated</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$novedades->id}}</td>
                    <td>{{$novedades->tipnov_nov}}</td>
                    <td>{{$novedades->camellon_nov}}</td>
                    <td>{{$novedades->fecha_nov}}</td>
                    <td>{{$novedades->tiempo_nov}}</td>
                    <td>{{$novedades->dosis_nov}}</td>
                    <td>{{$novedades->costopro_nov}}</td>
                    <td>{{$novedades->costoman_nov}}</td>
                    <td>{{$novedades->operario_nov}}</td>
                    <td>{{$novedades->cattoxica_nov}}</td>
                    <td>{{$novedades->estado_nov}}</td>
                    <td>{{$novedades->siembra_id}}</td>
                    <td>{{$novedades->producto_id}}</td>
                    <td>{{$novedades->created_at}}</td>
                    <td>{{$novedades->updated_at}}</td>
                    

				</tr>
			</tbody>
		</table>	
        
        
@endsection