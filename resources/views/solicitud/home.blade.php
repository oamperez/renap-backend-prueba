@extends('layout.app')
@section('content')
	<div style="margin-top: 6rem; margin-bottom: 2rem;">
    	<div class="row justify-content-center">
			<div class="col-md-6">
			@if(Auth::user()->solicitud->state == 'Solicitado')
				<div class="alert alert-primary text-center" role="alert">
					{{Auth::user()->first_name}} {{Auth::user()->last_name}} 
					Tu DPI ya fue {{Auth::user()->solicitud->state}}
				</div>
				@elseif(Auth::user()->solicitud->state == 'En Proceso')
				<div class="alert alert-warning text-center" role="alert">
					{{Auth::user()->first_name}} {{Auth::user()->last_name}} 
					Tu DPI Esta {{Auth::user()->solicitud->state}}
				</div>
				@endif
			</div>
		</div>
    	@if(Auth::user()->solicitud->state == 'Listo para Entregar')
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3 text-center align-self-center">
						<img src="/img/profile/{{Auth::user()->photo}}" style="width: 100%;">
					</div>
					<div class="col-md-9 align-self-center">
						<p class="card-text mt-4 mt-md-0"><strong>CUI: </strong>{{Auth::user()->dpi}}</p>
						<p class="card-text"><strong>Nombre: </strong>{{Auth::user()->first_name}}</p>
						<p class="card-text"><strong>Apellido: </strong>{{Auth::user()->last_name}}</p>
						<p class="card-text"><strong>E-mail: </strong>{{Auth::user()->email}}</p>
						<p class="card-text"><strong>Fecha de Nacimiento: </strong>{{Auth::user()->birthdate}}</p>
						<p class="card-text"><strong>Departamento: </strong>{{Auth::user()->department}}</p>
						<p class="card-text"><strong>Municipio: </strong>{{Auth::user()->municipality}}</p>
						<p class="card-text"><strong>Direccion: </strong>{{Auth::user()->address}}</p>
						<p class="card-text"><strong>Telefono: </strong>{{Auth::user()->phone}}</p>		
					</div>
				</div>		
			</div>	
		</div>
		@endif
    </div>        
@endsection