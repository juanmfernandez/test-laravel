<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token"  content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{  asset('js/app.js') }}" defer></script>
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="site-wrapper-404">
    <div class="preloader">
        <div class="preloader_in"></div>
    </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fright">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-dark" id="navbarNavAltMarkup">
                <div class="navbar-nav dark">
                    @guest
                            <a class="nav-link a-pad" href="{{ route('home') }}">{{ __('Home') }}</a>
                            <a class="nav-link a-pad" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                    @endguest
                </div>
            </div>
        </nav>
    @yield('content')
        <div class="footer">
            <div class="text-center">©2021 Todos los derechos reservados.</div>
        </div>
    </div>
    <script>
        setTimeout(function(){
            $('.preloader').fadeToggle();
        }, 1500);
    </script>
</body>
</html>