<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token"  content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{  asset('js/app.js') }}" defer></script>   
    <link rel="stylesheet" href="/font/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script>
        $(document).ready(function(){
            $("#bt-uno").click(function(){
                $('#p-uno').show();
                $('#p-tres, #p-dos').hide();
                $('#bt-uno').addClass('btn-danger');
                $('#bt-dos, #bt-tres').removeClass('btn-danger');
            });
            $("#bt-dos").click(function(){
                $('#p-dos').show();
                $('#p-tres, #p-uno').hide();
                $('#bt-dos').addClass('btn-danger');
                $('#bt-uno, #bt-tres').removeClass('btn-danger');
            });
            $("#bt-tres").click(function(){
                $('#p-dos, #p-uno').hide();
                $('#p-tres').show();
                $('#bt-tres').addClass('btn-danger');
                $('#bt-uno, #bt-dos').removeClass('btn-danger');
            });

            $("#shadow, #shadow2").mouseover(function(){
                $(this).addClass('shadow-lg');
                $(this).children(".team-social").animate({opacity: .5},  400);
            });
            $("#shadow, #shadow2").mouseleave(function(){ 
                $(this).removeClass('shadow-lg');
                $(this).children(".team-social").animate({opacity: 0}, "now");
            });
            $(window).scroll(function() {
                if ($(document).scrollTop() > 10)  {
                    $("#navar").addClass("top-nav-collapse");

                } else {
                    $("#navar").removeClass("top-nav-collapse");
                }
            });

            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                $("p").addClass("test");
                } else {
                $("p").removeClass("test");
                }
            });
        });
        $( document ).ready(function() {
            $('#welcomeModal').modal('toggle');
        });   
    </script>

</head>
<body class="site-wrapper-login">
    <div class="preloader">
        <div class="preloader_in"></div>
    </div>

    <nav id="navar" class="navbar navbar-pasific navbar-expand-lg navbar-light bg-light fixed-top ">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-dark" id="navbarText">
            <a class="navbar-brand" href="#">
                <img src="/images/Logo6.png" alt="Vida Digital">
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                </li>
            </ul>
            @guest
                <ul class="navbar-nav dark">
                    <li class="nav-item">
                        <a class="nav-link text-white a-pad-log" href="{{ route('home') }}">{{ __('HOME') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white a-pad-log" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    </li>                   
                </ul>
            @else
                                <li class="nav-item dropdown" style="list-style: none;">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white  text-center dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" id="salir" href="{{ route('logout') }}"
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
    </nav>
        
    
    @yield('content')

    <script>
        setTimeout(function(){
            $('.preloader').fadeToggle();
        }, 1500);
    </script>
    <script src="/js/parallax.min.js"></script>
</body>
</html>