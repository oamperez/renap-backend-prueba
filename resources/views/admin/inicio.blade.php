@extends('layout.app')
@section('title','Panel Administrativo')
@section('content')
	<div class="table-responsive" style="margin-top: 5rem;">
	  	<table class="table table-striped">
	  		<thead>
	  			<th>id</th>
		 		<th>Nombre</th>
		 		<th>Apellido</th>
		 		<th>E-mail</th>
		 		<th>Estado</th>
		 		<th>Cambiar Estado</th>
	  		</thead>
	 		<tbody>
	 			@foreach($solicituds as $solicitud)
 				<tr>
 					<td>{{ $solicitud->id }}</td>
		 			<td>{{ $solicitud->user->first_name }}</td>
		 			<td>{{ $solicitud->user->last_name }}</td>
		 			<td>{{ $solicitud->user->email}}</td>
		 			<td>@if($solicitud->state == 'Solicitado')
		 				<span class="badge badge-pill badge-danger p-2">
						@elseif($solicitud->state == 'En Proceso')
							<span class="badge badge-pill badge-warning p-2">
						@else
							<span class="badge badge-pill badge-success p-2">
						@endif
							{{ $solicitud->state }}</span>
		 			</td>
		 			<td>
	 					@if($solicitud->state != 'Listo para Entregar')
							{{ link_to_route('admin.edit','Cambiar Estado de Solicitud',[$solicitud->id],['class'=>'btn btn-primary btn-sm']) }}
						@else
							{{ link_to_route('admin.edit','Ver Solicitud',[$solicitud->id],['class'=>'btn btn-primary btn-sm']) }}
						@endif
					</td>
		 		</tr>
 				@endforeach
 			</tbody>
 		</table>
 	</div>
 @endsection