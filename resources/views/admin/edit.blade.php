@extends('layout.app')
@section('title','Panel Administrativo')
@section('content')
	<div class="card" style="margin-top: 5rem;">
		<div class="card-header">
			<h5>{{$solicitud->user->first_name}} {{$solicitud->user->last_name}}</h5>
		</div>
		{!! Form::model($solicitud,array('route'=>['admin.update',$solicitud->id],'method'=>'PUT','files'=>true)) !!}
		<div class="card-body">
			@if($solicitud->state=='Solicitado')
				<input type="text" name="state" id="state" style="display: none;" value="En Proceso">
				<p class="card-text"><strong>Estado: </strong><br>
					<h2><span class="badge badge-pill badge-success p-3">{{$solicitud->state}}</span></h2>
				</p>
			@elseif($solicitud->state=='En Proceso')
				<input type="text" name="state" id="state" style="display: none;" value="Listo para Entregar">
				<p class="card-text"><strong>Direccion: </strong>{{$solicitud->user->dpi}}</p>
				<p class="card-text"><strong>Estado: </strong><br>
					<h2><span class="badge badge-pill badge-warning p-3">{{$solicitud->state}}</span></h2>
				</p>
			@else
			<div class="row">
				<div class="col-md-3 text-center align-self-center">
					<img src="/img/profile/{!! $solicitud->user->photo !!}" style="width: 100%;">
				</div>
				<div class="col-md-9">
					<p class="card-text"><strong>CUI: </strong>{{$solicitud->user->dpi}}</p>
					<p class="card-text"><strong>Nombre: </strong>{{$solicitud->user->first_name}}</p>
					<p class="card-text"><strong>Apellido: </strong>{{$solicitud->user->last_name}}</p>
					<p class="card-text"><strong>E-mail: </strong>{{$solicitud->user->email}}</p>
					<p class="card-text"><strong>Departamento: </strong>{{$solicitud->user->department}}</p>
					<p class="card-text"><strong>Municipio: </strong>{{$solicitud->user->municipality}}</p>
					<p class="card-text"><strong>Direccion: </strong>{{$solicitud->user->address}}</p>
				</div>
			</div>
			@endif
		</div>
		<div class="card-footer">
			@if($solicitud->state!='Listo para Entregar')
				<button type="submit" class="btn btn-primary">Cambiar Estado de Solicitud</button>
			@endif
			<a href="{{ route('admin.index')}}" class="btn btn-danger">Cancelar</a>
		</div>
		{!! Form::close() !!}
	</div>
@endsection