<div class="card mb-3">
    <div class="card-header bg-dark text-center">
        <h4 class="text-white font-weight-bold mb-0">Solicitud de DPI</h4>
    </div>
    {!! Form::open(array('route'=>'solicitud.store','method'=>'POST','files'=>true)) !!}
    	<div class="card-body">
            {{ csrf_field() }}
            <div class="row">
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Nombre</label>
	                <input type="text" class="form-control" placeholder="Nombre" id="first_name" name="first_name">
	            </div>
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Apellido</label>
	                <input type="text" class="form-control" placeholder="Apellido" id="last_name" name="last_name">
	            </div>
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Fecha de Nacimiento</label>
	                <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="birthdate" name="birthdate">
	            </div>
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Departamento</label>
	                <input type="text" class="form-control" placeholder="Departamento" id="department" name="Department">
	            </div>
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Municipio</label>
	                <input type="text" class="form-control" placeholder="Municipio" id="municipality" name="municipality">
	            </div>
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Direccion</label>
	                <input type="text" class="form-control" placeholder="Direccion" id="address" name="address">
	            </div>
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Telefono</label>
	                <input type="tel" class="form-control" placeholder="12345678" maxlength="8" id="phone" name="phone">
	            </div>
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Correo Electronico</label>
	                <input type="text" class="form-control" placeholder="Correo Electronico" id="email" name="email">
	            </div>
	            <div class="form-group col-md-6">
	                <label for="" class="font-weight-bold">Foto</label><br>
	                <label for="photo" class="btn btn-primary btn-lg p-3"><i class="fas fa-file-image fa-4x"></i></label>
	                <input class="btn btn-primary" type="file" id="photo" name="photo" style="display: none;" accept="image/x-png,image/gif,image/jpeg">
	            </div>	            
            </div>    
	    </div>
	    <div class="card-footer">
	    	<div class="row">
		    	<div class="form-group mb-0 col-md-4">
		            <button type="submit" class="btn btn-dark btn-block btn-lg mb-3">ENVIAR SOLICITAR</button>
		        </div> 
		        <div class="form-group mb-0 col-md-4">
		            <a href="{{ route('welcome')}}" class="btn btn-danger btn-block btn-lg">SALIR</a>
		        </div> 
		    </div>
	    </div>
	{!! Form::close() !!}
</div>