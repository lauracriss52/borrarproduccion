@extends('layouts.master')
@section('contenido')
	@if(sizeof($productos) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id_pro</th>
					<th>Id_tip_pro_pro </th>
					<th>Nombre_pro </th>
					<th>Observaciones_pro</th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
				<tr>
					<td>{{$productos->Id}}</td>
					<td>{{$productos->Id_tip_pro_pro}}</td>
					<td>{{$productos->Nombre_pro}}</td>
					<td>{{$productos->Observaciones_pro}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay productos en este momento
		</div>

		@endif
@endsection