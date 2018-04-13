<!doctype html>
<html>
<style>
    #navegacion{
        background-color: black;
    }
    .contenedor{
        height: 50%;
    }

</style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="consultora persuasión y comunicación política">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/home.css">
        <link rel="stylesheet" type="text/css" href="/css/simple-sidebar.css">
        <script src="{{ asset('js/app.js') }}"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <title>Temple Consulting</title> 
    </head>
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Temple Consulting
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu" style="background-color: rgb(23, 23, 23)">
                        <li><a href="/banner">Banner</a></li>
                        <li><a href="/layout1">Sección 1</a></li>
                        <li><a href="/layout2">Sección 2</a></li>
                        <li><a href="/layout3">Sección 3</a></li>
                    </ul>
                </li>
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <button id="guardarCambios" class="btn btn-primary"><span class="fa fa-save"></span>   Guardar Cambios</button>
                <div class="contenedor">
                    @yield('contenido')
                </div>
                
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
<script>
    $(document).ready(function(){
         $("#wrapper").toggleClass("toggled");
    })
   
</script>
</body>
</html>
