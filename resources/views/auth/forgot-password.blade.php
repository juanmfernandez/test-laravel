@extends('layout')
@section('content')

<div class="" style="vertical-align: middle;padding-top: 17%;">
    <div class="row col justify-content-center w-100">  
        <div class="">
                <h3 class="text-center text-dark">{{ __('   Reset de contraseña') }}</h3>
                    <div class="">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group row">                                
                                <div class="col-md-12">
                                    <input type="email" name="email" id="email" placeholder="E-mail" class="form-control inp-cust-large border-0 text-center input-transparent form-control-lg rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger btn-lg rounded-pill btn-block inp-cust-large">
                                        {{ __('Enviar link') }}
                                    </button>
                                    </br>
                                   
                                </div>
                            </div>
                        </form>
                    </div>
        </div>
    </div>
</div>
    <div class="footer">
            <div class="text-center text-white">©2021 Todos los derechos reservados.</div>
    </div>
@endsection