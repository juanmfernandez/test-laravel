@extends('layout')

@section('content')
    @guest
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>No ha iniciado sesion</strong> Puede hacerlo en aqui <a class="nav-link text-white a-pad-log" href="{{ route('login') }}">{{ __('LOGIN') }}</a>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @else
       
        <div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ewelcomeModalTitle">{{ __('Bienvenido') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            {{ __('Hola ') }}
                                {{ Auth::user()->name }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>
    @endguest
@endsection
