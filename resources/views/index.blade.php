@extends('layout')
@section('section')
<div id="inicio" class="back-img-home" style="position:relative ;z-index:999 ;">
    <div class="test"> 
        <span class="titulo">{!!nl2br($home->banner->titulo)!!}</span><br>
        <span class="sub"  id="spann">{!!nl2br($home->banner->subtitulo)!!}</span><br>
           <br>
        <br>
        <br>
        <a id="contact" href="./#contacto" class="solici">Solicitar información</a>
    </div>
    <br>
      
</div>

<div id="compania" class="vh-height" style="background-color:#f9f9f9;  display:flex; justify-content: center; flex-direction: column;">
    <div class="adorno-title">
    </div>
    <div class="container " >
        <div class="row bottom-20">
            <div class="col-sm-12">
                <h2 class="text-center" style="color:#71002f;font-weight:bold;">{{$home->layout1->titulo}}</h2>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <p class="text-center p-21">{!!nl2br($home->layout1->texto)!!}</p>
            </div>
            <div class="col-sm-2"></div>
        </div>    
    </div>
    
    <div class="container ">
        <div class="row " >
        
            <div class="col-md-6">
              <h3 class="font-bold">{{$home->layout1->titulo2}}</h3> 
                <div class="row">
                  <div class="col-md-3 text-center">
                    <img src="./imgs/vision.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-9">
                   <p class="text-gray">{!!nl2br($home->layout1->texto2)!!}</p> 
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="font-bold">{{$home->layout1->titulo3}}</h3>
                <div class="row">
                  <div class="col-md-3 text-center">
                    <img src="./imgs/mision.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-9">
                    <p class="text-gray">{{$home->layout1->texto3}}</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="servicios"  class="vh-height" style=" display:flex; justify-content: center; flex-direction: column; position:relative;">
    <div class="adorno-title">
       <h2 class="text-center center-title font-bold title-margin-top">Nuestros&nbsp;&nbsp;&nbsp;<span class="text-pink ">Servicios</span></h2>
    </div>
   
    <div class="row" style="">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
                <p class="text-center p-21">{{$home->layout2->texto}}</p>
        </div>
        <div class="col-sm-2"></div>
    </div>
     <div class="container">
  <div class="row">
        <div class="col-sm-6 col-md-4" style=";">
            <div class="">
                <img src="./imgs/servicios-home/consultoria-politica.png" class="img-fluid mx-auto d-block img-width" id="imgsConsu"  alt="" style="">  
            </div>
            <br> 
            <p class="text-center p-21 font-bold">{{$home->layout2->nombre}}</p>
            <br> 
            <p class="text-center p-bottom"><a class="ver" href="{{url('/consultoria')}}">VER SERVICIO</a></p> 
             <br>
        </div>
        <div class="col-sm-6 col-md-4" style=";">
            <div class="">
                <img src="./imgs/servicios-home/opinion-publica.png" class="img-fluid mx-auto d-block img-width" id="imgsConsu" alt=""  style="padding-top:35px;">  
            </div>
            <br>
            <p class="text-center p-21 font-bold ">{{$home->layout2->nombre2}}</p>
            <br> 
            <p class="text-center p-bottom"><a class="ver" href="{{url('/estudio')}}">VER SERVICIO</a></p> 
            <br>
        </div>
        <div class="col-sm-6 col-md-4" style=";">
            <div class="">
                <img src="./imgs/servicios-home/promocion-activacion-politica.png" class="img-fluid mx-auto d-block img-width"  id="imgsConsu" alt="">
            </div>
            <br>
            <p class="text-center p-21 font-bold">{{$home->layout2->nombre3}}</p> 
            <br>
            <p class="text-center p-bottom"><a class="ver" href="{{url('/promocion')}}">VER SERVICIO</a></p> 
             <br>
        </div>     
    </div>
    </div>
     <br> <br>
    <div id="down-button" class="button-div text-center col-sm-12">
        <a id="button"><img class="telefonito" src="./imgs/flecha_sig.png" width="" height="100%"></a>
    </div>
</div>

<div id="testdiv" class="fondo-tinto">
    <div class="row" style="padding: 40px 10px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <p class="p-21 text-center" style="color:white;">Definimos y conceptualizamos una <span class="text-pink">estrategia de comunicación política</span> dirigida a los electores, capaz de motivar al voto favorable.</p>
            <p class="text-center" style="padding-top: 20px;" ><a style="color:white;border-color:white;" class="ver" href="">Solicitar Servicio</a></p> 
        </div>
        <div class="col-sm-2"></div>
    </div>
    
</div>

<div id="casos" class="container vh-height" style=" display:flex; justify-content: center; flex-direction: column;">
    <div class="adorno-title">
       <h2 class="text-center center-title font-bold title-margin-top">{{$home->layout3->titulo}}</h2>
    </div>

    <div class="row bottom-20">
        <div class="col-md-2"></div>
        <div class="col-sm-12 col-md-8">
                <p class="text-center p-21">{{$home->layout3->texto}}</p>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row ">
       <div class="col-sm-6 col-md-4">
           <p class="p-21 text-center text-black font-bold line-height-dot-5">
              RESULTADOS
           </p>
           <p class="p-21 text-center font-bold text-pink line-height-dot-5">
               98% confiables
           </p>
           <p class="text-center font-bold text-pink line-height-dot-5">
               en encuestas
           </p>
           <p class="text-gray text-center">
               {{$home->layout3->texto2}}
           </p>
       </div>
       <div class="col-sm-6 col-md-4">
            <p class="p-21 text-center text-black font-bold line-height-dot-5">
              CON MÁS DE
            </p>
            <p class="p-21 text-center font-bold text-pink line-height-dot-5">
               14 años
           </p>
           <p class="text-center font-bold text-pink line-height-dot-5">
               de experiencia
           </p>
           <p class="text-gray text-center">
               {{$home->layout3->texto3}}
           </p>
       </div>
       <div class="col-sm-6 col-md-4">
            <p class="p-21 text-center text-black font-bold line-height-dot-5">
              90%
             </p>
             <p class="p-21 text-center font-bold text-pink line-height-dot-5">
               DE OBJETIVOS
           </p>
           <p class="text-center font-bold text-pink line-height-dot-5">
               planeados se han cumplido
           </p>
           <p class="text-gray text-center">
               {{$home->layout3->texto4}}
           </p>
       </div>
    </div>
</div>


<div id="supercontenedor" >
<div id="contacto" class="vh-height" style="background:#131C2E;  display:flex; justify-content: center; flex-direction: column;">
   <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 col-sm-12 col-xs-12" id="infodiv" style="">
                       <p style="color:#fff;font-size:30px;font-weight: bold;margin-top:11%;">Contáctanos</p>  
                       <hr style="color: #EC2552;background-color: #EC2552;height: 5px;width:7%;margin-right: 96%;">                    
                       <p style="color:#fff;font-size:20px;" id="datoSitio"> <span style="font-size: 22px;"><a style="color:white;text-decoration:none;" target="_blank" href="https://api.whatsapp.com/send?phone=523339445826">+52 (33) 3944.5826</a></span>
                        <br><a style="color:white;text-decoration:none;" href="mailto:jaimemartinez@templeconsulting.net?Subject=Consultoria%20Politica" target="_top">jaimemartinez@templeconsulting.net</a> <br>
                       www.templeconsulting.net</p>
                       <a target="_blank" href="https://www.facebook.com/templeconsultingsc"><img src="./imgs/social_fb.png" class="" alt="Enlace a Facebook"></a>
                        <a target="_blank" href="https://twitter.com/Temple_Consul"><img src="./imgs/social_twitter.png" class="" alt="Enlace a Twitter"> </a>
                         
                         
                        <br><br><br>
                       <img src="./imgs/logo_bco.png" style="width: 40%;" alt="">             
                </div> 
                
                <div class="col-md-5 col-sm-12 col-xs-12" id="formita"  style="margin-bottom: 6%;margin-left: 61px;">
                        <p style="color:#fff;font-size:30px;margin-top:11%;">Envíanos un mensaje</p>
                        <form id="ajax-contacto" action="send-contacto.php" method="post">
                        <div id="scope"></div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:*" required>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-control" id="telefono" name="telefono"  placeholder="Teléfono:*"required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email"  name="email" placeholder="Email:*"required>
                        </div>
                        <div class="form-group">
                            <textarea style="resize: none;" class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Mensaje:*"required></textarea>
                        </div>
                        <input type="hidden" name="seccion" value="consultoria politica"required>
                        <div class="form-group">
                            <button id="submit" type="submit"style="background: #EC2552;color:#fff;cursor: pointer; border: none;">Enviar Mensaje</button>
                        </div>
                      </form>
                      <div id="formMessages" style="display:none;"></div>
                </div>
            </div>                        
        </div> 
    </div>    
              
  
   
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
   
    
</body>
@push('scripts')
<script>
$(document).ready(function(){
 
  if($('#servicios').visible(true)){
    console.log('si')
    if($(window).width() > 480){
      $('#down-button').show();
    }else{
      $('#down-button').hide();
    }
  }else{
    console.log('no')
    $('#down-button').hide();
  }
})
$('#ini').click(function(){
  $('html, body').animate({
      scrollTop: $("#inicio").offset().top
  }, 300);
  $('#down-button').hide();
})
$('#serv').click(function(){
  $('html, body').animate({
      scrollTop: $("#servicios").offset().top
  }, 300);
  $('#servicios').hide();
  $('#servicios').fadeIn(1000);
  if($(window).width() > 480){
   $('#down-button').slideToggle();
  }
   $('#menu-desplegable').collapse('hide');
})

$('#comp').click(function(){
  $('html, body').animate({
      scrollTop: $("#compania").offset().top
  }, 300);
  $('#compania').hide();
  $('#compania').fadeIn(1000);
  $('#down-button').hide();
})

$('#cases').click(function(){
  $('html, body').animate({
      scrollTop: $("#casos").offset().top
  }, 300);
  $('#casos').hide();
  $('#casos').fadeIn(1000);
  $('#down-button').hide();
})
$('#contact').click(function(){
  $('html, body').animate({
      scrollTop: $("#contacto").offset().top
  }, 300);
  $('#down-button').hide();
})

$('#button').click(function(){
  $('#down-button').slideToggle();
})

  $('form').submit(function(event) {
    event.preventDefault(); 
    var formData = $('#ajax-contacto').serialize();
    $.ajax({
      type: 'post',
      url:  $('form').attr('action'),
      data:formData,
      success:function(response){
        $('#formMessages').removeClass('error');
        $('#formMessages').addClass('success'); 
        $('#formMessages').text(response);
        $('form input').val("");
        $('form textarea').val("");
        $('.success').fadeIn(1500);
        $('.success').hide(1500);

    }
   })
  });
$(window).scroll(function(){

  if($('#scope').visible(true)){
    if($(window).width() < 850){ $('nav').hide();} 
  }else{
    $('nav').show();
  }
/* if($('#casos').visible(true)){
    $('#down-button').hide();
  }*/
  
})
$("#button").click(function() {

    $('html, body').animate({
        scrollTop: $("#testdiv").height()+$(window).scrollTop()
    }, 500);
});
/*$(document).ready(function(){
    var ir = window.location.hash;
    var new_position = jQuery(ir).offset();
    var navbar = $("#menunav").height();
    console.log("Tamaño Navbar",navbar);
    window.scrollTo(new_position.left,new_position.top-navbar);
    console.log('ready')
    return false;
})*/

 /*$('.comp').click(function(){
        $('#supercompania').css('height', '100vh');
        $('#supercompania').css('width', '100%');
        $('#supercompania').css('margin', 'auto');
    });*/


/*$(window).scroll(function(){
    // This is then function used to detect if the element is scrolled into view
    function elementScrolled(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
    }
     
    // This is where we use the function to detect if ".box2" is scrolled into view, and when it is add the class ".animated" to the <p> child element
    if(elementScrolled('#contacto')) {
        $('nav').hide();
    }else{
        $('nav').show();
    
}
});*/
</script>
@endpush
@stop