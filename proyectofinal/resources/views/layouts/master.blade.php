<!doctype html>
<html class="no-js" lang="en">

    <head>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>jJobson</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

        <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- All css files are included here
        ============================================ -->
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link rel="stylesheet" href="css/core.css">

        <!-- Theme shortcodes/elements style
        ============================================ -->
        <link rel="stylesheet" href="css/shortcode/shortcodes.css">

        <!-- Color Swithcer CSS
        ============================================ -->
        <link rel="stylesheet" href="css/plugins/color-switcher.css">

        <!--  Theme main style
        ============================================ -->
        <link rel="stylesheet" href="style.css">

        <!-- Color CSS
        ============================================ -->
        <link rel="stylesheet" href="css/plugins/color.css">

        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">

        <!-- Modernizr JS -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- Color Css Files
        ============================================ -->
      
    </head>

    <body>
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                 <header id="sticky-header" class="header-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="images/logo/logo.png" alt="JobHelp">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9 hidden-sm hidden-xs">
                                <div class="pull-right">
                                    <nav id="primary-menu">
                                        <ul class="main-menu text-right">
                                            <li><a href="{{ url('/') }}">Inicio</a>
                                            </li>
                                            <li><a href="{{ url('/ofertas') }}">Ofertas</a></li>
                                            <li><a href="{{ url('/alumnos')  }}">Alumnos</a></li>
                                            <li><a href="{{ url('/profesores')  }}">Profesores</a></li>
                                            <li><a href="{{ url('/perfil')  }}">Perfil</a></li>
                                        </ul>
                                    </nav>
                                    <div class="login-btn pt-36">
                                         <a class="modal-view button" href="#" data-toggle="modal" data-target="#productModal">Cerrar sesión</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="{{ url('/') }}">Inicio</a>
                                                </li>
                                                <li><a href="{{ url('/ofertas') }}">Ofertas</a></li>
                                                <li><a href="{{ url('/alumnos')  }}">Alumnos</a></li>
                                                <li><a href="{{ url('/profesores')  }}">Profesores</a></li>
                                                <li><a href="{{ url('/perfil')  }}">Perfil</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->
                </header>
                <!-- End of Header Area -->

                @yield('content')
                                <!--Start of Footer Widget-area-->
                <div class="footer-widget-area black-bg pt-50 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                     <h3 class="text-white mb-21">Sobre el centro</h3>
                                    <p class="text-white pr-10">CIFP Txurdinaga es un centro de enseñanza de formación profesional ubicado en el barrio de Txurdinaga. Se imparten cursos de Grado Medio y Grado Superior de las ramas de Informática, Química, Administración y Finanzas,
                                        Comercio y Ayuda Social.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                     <h3 class="text-white mb-21">Contacto</h3>
                                     <span class="text-white mb-9"><i class="fa fa-phone"></i>+34 944 125 712</span>
                                     <span class="text-white mb-9"><i class="fa fa-envelope"></i> idazkaria@fptxurdinaga.com</span>
                                     <span class="text-white mb-9"><i class="fa fa-globe"></i>www.fptxurdinaga.hezkuntza.net</span>
                                     <span class="text-white mb-9"><i class="fa fa-map-marker"></i>C/ Doctor Ornilla, 2 (48004 Bilbao)</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                     <h3 class="text-white mb-21">Cursos Grado Medio</h3>
                                    <ul class="footer-list text-white">
                                        <li>Técnico en actividades comerciales</li>
                                        </br>
                                        <li>Técnico en instalaciones de telecomunicaciones</li>
                                        </br>
                                        <li>Técnico en sistemas microinformáticos y redes</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm">
                                <div class="single-footer-widget">
                                     <h3 class="text-white mb-21">Cursos Grado Superior</h3>
                                    <ul class="footer-list text-white">
                                        <li>Técnico superior en integración social</li>
                                        </br>
                                        <li>Técnico superior en desarrollo de aplicaciones multiplataforma</li>
                                        </br>
                                        <li>Técnico superior en administración y finanzas</li>
                                        </br>
                                        <li>Técnico superior en gestión de ventas y espacios comerciales</li>
                                        </br>
                                        <li>Técnico superior en laboratorio de análisis y de control de calidad</li>
                                        </br>
                                        <li>Técnico superior en desarrollo de aplicaciones web</li>
                                        </br>
                                        <li>Técnico superior en administración de sistemas informáticos en red</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget-area-->
                <!-- Start of Footer area -->
                <footer class="footer-area orange-bg text-center ptb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-text">
                                     <span class="text-white block">Copyright&copy; <span>Talde5</span> 2019. Todos los derechos reservados. Creado por Aritz Pérez, Alexander Lara, Gotzon Otazua y Andrea Fernández.</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer area -->
            </div>
            <!--End of Bg White-->
        </div>
        <!--End of Main Wrapper Area-->
        </div>
        <!--End of Bg White-->
        </div>
        <!--End of Main Wrapper Area-->


        <!-- jquery latest version
        ========================================================= -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>

        <!-- Bootstrap framework js
        ========================================================= -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Owl Carousel js
        ========================================================= -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- nivo slider js
        ========================================================= -->
        <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="lib/nivo-slider/home.js" type="text/javascript"></script>

        <!-- Js plugins included in this file
        ========================================================= -->
        <script src="js/plugins.js"></script>

        <!-- Video Player JS
        ========================================================= -->
        <script src="js/jquery.mb.YTPlayer.js"></script>

        <!-- AJax Mail JS
        ========================================================= -->
        <script src="js/ajax-mail.js"></script>

        <!-- Mail Chimp JS
        ========================================================= -->
        <script src="js/jquery.ajaxchimp.min.js"></script>

        <!-- StyleSwitch JS
        ========================================================= -->
        <script src="js/styleswitch.js"></script>

        <!-- Waypoint Js
        ========================================================= -->
        <script src="js/waypoints.min.js"></script>

        <!-- Main js file contents all jQuery plugins activation
        ========================================================= -->
        <script src="js/main.js"></script>


    </body>

</html>