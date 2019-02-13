<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-secondary">
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">RENAP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ml-auto">
                @if(Auth::user()->type =='admin')
                    <a class="nav-item nav-link my-auto {{ !Route::is('admin.index') ?: 'active' }}" href="{{route('admin.index')}}">Listado de Solicitudes<span class="sr-only">(current)</span></a>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="options" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="/img/profile/{{Auth::user()->photo}}" style="width: 30px; height: 30px; border-radius: 50%;">
                    </a>
                    <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="options">
                      <h6 class="dropdown-header" style="cursor: default;">{{Auth::user()->first_name }} {{Auth::user()->last_name}}</h6>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('logout') }}">Salir</a>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>