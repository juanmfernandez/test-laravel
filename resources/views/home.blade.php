@extends('layout')

@section('content')
@guest
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
        <header class="pbt100 parallax-window-5" data-parallax="scroll" data-speed="0.5" data-image-src="/images/VD-SLIDERTEST.png" data-position-y="top">
            <div class="intro-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pt100">
                            <h1 class="brand-heading font-montserrat text-uppercase text-white" data-in-effect="fadeInDown">Te guiamos hacia la
                                transformación digital.</h1>
                            <p class="intro-text text-white text-open-sans text-uppercase" data-in-effect="swing">Construcción de servicios
                                para el mundo de hoy.</p>
                        </div>
                    </div>
                </div>
                
                <div class="intro-direction">
                    <a href="#welcome">
                        <div class="mouse-icon"><div class="wheel"></div></div>
                    </a>
                </div>
                
            </div>
        </header>

        <div class="bg-gray">
            <div class="container pbt50">
                <div class="row">
                    <div class="col-md-12">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <button id="bt-uno" class="btn btn-lg btn-block">Desarrollo Web</button>
                        </li>
                        <li class="nav-item">
                            <button id="bt-dos" class="btn btn-lg btn-block btn-danger">Desarrollo Móvil</button>
                        </li>
                        <li class="nav-item">
                            <button id="bt-tres" class="btn btn-lg btn-block">API's</button>
                        </li>
                     </ul>
                        <div class="tab-content">
                            <div id="p-uno" class="bg-gray pt25 pb25 tab-pane " style="display: none;">
                                <div class="row">
                    
                                    <div class="xs-6-unif mt30">                    
                                        <div id="shadow" class="team team-two animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-JS.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>JavaScript<small class="not-found-color ">Desarrollo Web</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-Csharp.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>C#<small class="not-found-color ">Desarrollo Web</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-HTML.jpg" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>HTML 5<small class="not-found-color ">Desarrollo Web</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-CSS.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>CSS 3<small class="not-found-color ">Desarrollo Web</small></h5>

                                        </div>                    
                                    </div>
                                    
                                    <div class="xs-6-unif mt30">                    
                                        <div id="shadow" class="team team-two animated zoomIn" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-REACT.jpeg" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>React<small class="not-found-color ">Desarrollo Web</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow"  class="team team-two animated zoomIn" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-VUE.jpeg" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>VUE<small class="not-found-color ">Desarrollo Web</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow"  class="team team-two animated zoomIn" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-PHP.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>PHP 8<small class="not-found-color ">Desarrollo Web</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-NODEJS.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>NodeJS<small class="not-found-color ">Desarrollo Web</small></h5>

                                        </div>                    
                                    </div>

                                </div>
                
                            </div>
                            <div id="p-dos" class="bg-gray pt25 pb25 " >
                                <div class="row">
                    
                                    <div class="xs-6-unif mt30">                    
                                        <div id="shadow" class="team team-two animated zoomIn visible  " data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-KOTLIN.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>Kotlin<small class="not-found-color ">Desarrollo Móvil</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn visible  " data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-REACTNATIVE.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>React Native<small class="not-found-color ">Desarrollo Móvil</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn visible  " data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-SWIFT.jpg" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>Swift<small class="not-found-color ">Desarrollo Móvil</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn visible  " data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-JS.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>JavaScript<small class="not-found-color ">Desarrollo Móvil</small></h5>

                                        </div>                    
                                    </div>
                                    
                                    

                                </div>
                
                            </div>
                            <div id="p-tres" class="bg-gray pt25 pb25 tab-pane" style="display: none;">
                                <div class="row">
                    
                                    <div class="xs-6-unif mt30">                    
                                        <div id="shadow" class="team team-two animated zoomIn" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-NODEJS.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>NodeJS<small class="not-found-color ">Desarrollo API</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-PY.jpg" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>Python<small class="not-found-color ">Desarrollo API</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-PHP.png" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>PHP 8<small class="not-found-color ">Desarrollo API</small></h5>

                                        </div>                    
                                    </div>

                                    <div class="xs-6-unif mt30">
                                        <div id="shadow" class="team team-two animated zoomIn" data-animation="zoomIn" data-animation-delay="100">                            
                                            <img src="/images/VD-REACT.jpeg" alt="" class="img-responsive">
                                            <div class="team-social">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </div>
                                            <h5>React<small class="not-found-color ">Desarrollo API</small></h5>

                                        </div>                    
                                    </div>

                                </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pbt75" style="background:url(/images/VD-SLIDERTEST.png) 50% 0 no-repeat;">
            <h1 class="font-montserrat text-center text-white">
                Brindamos soluciones a medida.
            </h1>
            <h5 class="text-center text-white">
                Entendemos que cada organizacion es compleja y única por lo que nos comprometemos al 100% con cada proyecto.
            </h5>
            <p class="text-center">
                <a class="btn btn-danger">Únete al Team</a>
            </p>
        </div>

        <footer id="footer" class="footer_landing center-block">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-2 col-xs-12 mb25">
                        <div class="copyright center-block">© 2021. Todos los derechos reservados.</div>
                    </div>
                    
                    <div class="col-md-8 col-xs-12 text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class=" bb-solid-1">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                    <div class="col-md-2 col-xs-12">
                        <div class="social-container">
                            <ul class="footer-social text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                    
                </div>
                
            </div>
        </footer>
@endsection
