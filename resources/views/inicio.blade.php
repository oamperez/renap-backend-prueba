@extends('layout.app')
@section('content')
    @if(Auth::user())
        <div class="card" style="margin-top: 25%;">
            <div class="card-body text-center">
                    <h1 class="text-dark " >RENAP</h1>
                    <p class="font-weight-bold">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
                @if(Auth::user()->type == 'admin')
                    <p class="font-weight-bold">Administrador</p>
                    <a href="{{ route('admin.index')}}" class="btn btn-warning text-dark font-weight-bold btn-lg">Panel Administrativo</a>
                @else
                    <a href="{{ route('home')}}" class="btn btn-warning text-dark font-weight-bold btn-lg">Ver Solicitud</a>
                @endif
            </div>
        </div>      
    @else
	<div class="row" style="margin-top: 5rem;">
        <div class="col-md-6 col-lg-8 mb-5">
            <h1 class="text-dark">RENAP</h1>
                <p class="text-dark">Ya puedes solicitar tu DPI.</p>
                <a href="{{route('solicitud.index')}}" class="btn btn-dark">Solicitar DPI</a> 
            </div>
            <div class="col-md-6 col-lg-4">
                @include('auth.form.formlogin')
        </div>
    </div>
    @endif
@endsection