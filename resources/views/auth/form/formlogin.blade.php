<div class="card mb-2">
    <div class="card-header bg-dark text-center">
        <h4 class="text-white font-weight-bold mb-0">LOGIN</h4>
    </div>
    <div class="card-body">
         {!! Form::open(array('route'=>'login.store','method'=>'POST')) !!}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="" class="font-weight-bold">Correo Electronico</label>
                <input type="text" class="form-control" placeholder="Correo Electronico" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="" class="font-weight-bold">Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-dark btn-block">INICIAR SESSION</button>
            </div>
        {!! Form::close() !!}
    </div>
</div>