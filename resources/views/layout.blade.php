<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="consultora persuasión y comunicación política">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/home.css">
        <title>Temple Consulting</title> 
    </head>
    <body>
    <nav class="navbar navbar-expand-lg  fixed-top" id="menunav"> 
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./imgs/logo-temple-header.png" class="brand-logo" alt=""> 
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> 
        <img src="./imgs/Burger.png" height="35px" width="40px">   
    </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul id="menu-desplegable" class="navbar-nav ml-auto" >
            <li class="nav-item m-li active">
                <a id="ini" class="nav-link " href=".#/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li id="comp"  class="nav-item m-li">
                <a id="comp" class="nav-link anclas comp" href="./#compania">Compañía</a>
            </li>
            <li class="nav-item m-li">
                <a id="serv" class="nav-link anclas" href="./#servicios">Servicios</a>
            </li>
            <li class="nav-item m-li">
                <a id="cases" class="nav-link anclas" href="./#casos">Casos de éxito</a>
            </li>
            <li id="desktop" class="nav-item m-li">
                <a id="contact" class="nav-link contacto-link text-center" href="#contacto" >Contacto</a>
            </li>
            
            <li class="nav-item m-li">
                <a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=523339445826"><img class="telefonito" src="./imgs/telefonito.png" height="35px"> +52 (33) 3944.5826</a>
            </li>
            <li class="nav-item m-li">
            <a  class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=523339445826"><img src="./imgs/whatsapp.png" height="35px"> +52 (33) 3944.5826</a>
            </li>
            <li id="mobile" class="nav-item m-li hidden">
                <a class="nav-link contacto-link text-center" href="#contacto" >Contacto</a>
            </li>

        </ul>
        </div>
    </div>
    </nav>

    <section>
         @yield('section')
    </section>
   
    <div class="termAndConditions">
        <div class="container">       
                <div class="row"> 
                    <div class="col-md-1"></div>   
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <p class="ter-mobile ter">Temple Consulting® |  Todos los derechos </p>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <a href="terminos.php">
                            <p class="ter-mobile ter">Términos y Condiciones</p>
                        </a>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
        </div>
    </div>  
  

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/jquery.visible.min.js') }}"></script>
@stack('scripts')
</body>
</html>

