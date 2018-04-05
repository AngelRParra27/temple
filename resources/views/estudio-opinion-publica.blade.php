@extends('layout')
@section('section')
<div class="back-img-opinion"style="position: relative;z-index: 999;">
    <div class="test"> 
        <span class="titulo">Estudios de Opinión Pública</span><br><br>
        <span class="sub-edop"  id="spann">Realizamos estudios certeros, confiables y verídicos,</span><br>
        <span class="sub-edop"  id="spann">tanto cuantitativos como cualitativos, para conocer la</span><br>
        <span class="sub-edop"  id="spann">opinón de la población en temas específicos, haciendo</span><br>
        <span class="sub-edop"  id="spann">uso de herramientas científicas y tecnológicas para </span><br>
        <span class="sub-edop"  id="spann">minimizar el margen de error en los resultados.</span>
        <br>
        <br>
        <a href="#contacto" class="solici">Solicitar información</a>
    </div>
        
</div>
<div style="background: rgba(249, 250, 250, 1);padding-top:4%;">
   <div class="bg-header-estu-cuanti">
            <center>
                <h2 class="cuanti">Estudios Cuantitativos</h2>
            </center>          
   </div>
   <div class="container">
        <div class="col-md-12" style="padding-bottom: 7%;">
            <div class="row">
                <div class="col-md-1"></div>
           <div class="col-md-10">                
                <p class="infocuanti">Temple Consulting diseña los instrumentos de investigación específicos para cada estrategia política. Contamos con un método de trabajo que asegura la calidad del levantamiento de las encuestas evitando el error o sesgo. Todas las entrevistas se registran en una tableta que nos ofrece geo localización de los entrevistados, audio de respaldo y seguimiento vía satélite del recorrido de los encuestadores.</p>
                <br><br>
           </div>
            </div>
             
                 
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="padding-left: 1px;">
                    <h3 class="tipoEstudio" style="margin-bottom:20px;">Tipos de estudios cuantitativos</h3>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-left:1px;">                    
                    <h4 class="tipoEstudio" style="color:#1A2745;">Benchmark Poll</h4>
                    <ul style="padding-left: 15px;">
                        <li class="opc">Herramienta de profundidad estadística</li>
                        <li class="opc">Ideal para el analisís de cruces</li>
                        <li class="opc">Evaluación de posicionamiento y desempeño de gobierno</li>
                        <li class="opc">Punto de partida para toda campaña</li>
                    </ul>
                    <br>
                    <div class="media">
                            <img class="d-flex align-self-center" src="./imgs/benchmark.png" alt="">
                        <div class="media-body">
                            <p class="benchmark">Ideal para el diseño de la estrategía política o electoral. Se conocen los temas importantes y coyunturales de la política o campaña. Incluye 1200 entrevistas.</p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-left:1px;">
                    <h4 class="tipoEstudio" style="color:#1A2745;">Bushfire</h4>
                    <ul style="padding-left: 15px;">
                        <li class="opc">Evaluación y ajuste de estrategia</li>
                        <li class="opc">Comparativos a través del del tiempo</li>
                        <li class="opc">Cantidad de entrevistados estará entre 600 y 800.</li>
                    </ul>
                    <br>
                    <div class="media">
                            <img class="d-flex align-self-center" src="./imgs/bushfire.png" alt="">
                        <div class="media-body">
                            <p class="benchmark">Instrumento de aplicación periódica, útil para medir y dar seguimiento a la estrategia. Ajusta la estrategia de acuerdo a la coyuntura presente en el entorno político.</p>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>


             <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-left:1px;">                    
                    <h4 class="tipoEstudio" style="color:#1A2745;">Traking  Poll</h4>
                    <ul style="padding-left: 15px;">
                        <li class="opc">Información estadística día a día</li>
                        <li class="opc">Orienta las decisiones en momentos críticos</li>
                        <li class="opc">Evalúa la calidad del mensaje y la campaña</li>
                        <li class="opc">Consta de 100 entrevistas diarias mínimas</li>
                    </ul>
                    <br>
                    <div class="media">
                            <img class="d-flex align-self-center" src="./imgs/traking.png" alt="" style="margin-right:10px;">
                        <div class="media-body">
                            <p class="benchmark">Revela el estado de la opinión pública, su histórico y hacia donde se dirige. Evalúa el avance de las campañas, los índices de credibilidad y potencia del mensaje.</p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-left:1px;">
                    <h4 class="tipoEstudio" style="color:#1A2745;">Exit Poll</h4>
                    <ul style="padding-left: 15px;">
                        <li class="opc">Seguimiento en vivo de la votación</li>
                        <li class="opc">Ajuste oportuno en movilización</li>
                        <li class="opc">Claridad política en las decisiones</li>
                        <li class="opc">Herramienta básica para la movilización de los simpatizantes</li>
                    </ul>
                    <br>
                    <div class="media">
                            <img class="d-flex align-self-center" src="./imgs/exit.png" alt="">
                        <div class="media-body">
                            <p class="benchmark">Se capturan los datos en una tabla que transmite en el momento la información y se procesa mostrándose en una tabla dinámica.</p>
                        </div>
                    </div>
                </div>
            </div>                         
        </div>       
   </div> 
</div>


<div style="margin-top: 4%;">
   <div class="bg-header-estu-cuanti">
            <center>
                <h2 class="cuanti" style="color:#460926;">Estudios Cualitativos</h2>
            </center>          
   </div>
   <div class="container">
        <div class="col-md-12" style="padding-bottom: 7%;">
            <div class="row">
                <div class="col-md-1"></div>
           <div class="col-md-10">
                <p class="infocuanti">Los estudios cualitativos son utilizados como complemento de la investigación cuantitativa, son muy útiles para profundizar y exponer argumentos comunicacionales que se tendrán que desarrollar en la estrategia. Con esta metedología podemos comprender la forma de pensar de distintos grupos de personas según sea su perfil o interés. En este grupo de estudios incluimos los realizados a traves del uso de tecnologías de la neurociencia validando aún más los resultados.</p>
                <br><br>
           </div> 
            </div>
            
                 
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="padding-left: 1px;">
                    <h3 class="tipoEstudio" style="margin-bottom:20px;">Tipos de estudios cualitativos</h3>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-left:1px;">                    
                    <h4 class="tipoEstudio" style="color:#EC2552;">Grupos Focales</h4>
                    <ul style="padding-left: 15px;">
                        <li class="opcOtra">Conocimiento cualitativo profundo</li>
                        <li class="opcOtra">Comprobar la efectividad de todo tipo de estimulación audiovisual</li>
                        <li class="opcOtra">Hablar en el lenguaje del electorado</li>
                    </ul>
                    <br>
                    <div class="media">
                            <img class="d-flex align-self-center" src="./imgs/focales.png" alt="">
                        <div class="media-body">
                            <p class="benchmark">Con está metodología se calibra el tipo de lenguaje, las imágenes y los argumentos comunicacionales, partiendo de credibilidad o impacto que otorga el grupo objetivo del estudio para la estrategía política.</p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-left:1px;">
                    <h4 class="tipoEstudio" style="color:#EC2552;">Prueba de Rastreabilidad</h4>
                    <ul style="padding-left: 15px;">
                        <li class="opcOtra">Conocer donde los electores fijan más su atención</li>
                        <li class="opcOtra">Percepción inconsciente que se fija en el pensamiento</li>
                        <li class="opcOtra">Identificar imágenes y palabras más potentes</li>
                    </ul>
                    <br>
                    <div class="media">
                            <img class="d-flex align-self-center" src="./imgs/prueba.png" alt="">
                        <div class="media-body">
                            <p class="benchmark">Por medio de un protocolo de potenciales relacionados a eventos y rastreando la rotación del globo ocular, se miden las respuestas cerebrales ante un estímulo visual. Mejora el diseño de la publicidad y los mensajes donde la mente registra con mayor facilidad el estímulo.</p>
                        </div>
                    </div>
                </div>
            </div>

                <br><br>

             <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-left:1px;">                    
                    <h4 class="tipoEstudio" style="color:#EC2552;">Evaluación de la atención, congnición y acción</h4>
                    <ul style="padding-left: 15px;">
                        <li class="opcOtra">Palabras y guiones influyen más</li>
                        <li class="opcOtra">Imágenes ligadas al estímulo cerebral</li>
                        <li class="opcOtra">Mayor influencia en el mensaje de la campaña</li>
                    </ul>
                    <br>
                    <div class="media">
                            <img class="d-flex align-self-center" src="./imgs/atencion.png" alt="" style="margin-right:10px;">
                        <div class="media-body">
                            <p class="benchmark">Utilizando un protocolo GFP de actividad cerebral combinado con mediciones biométricas, analizan la respuesta hacia una pieza publicitaria con 3 objetivos claves: la atención, cognición y acción segundo a segundo.</p>
                            <p class="benchmark">
                             Así se logra entender en qué momento atraemos la atención de las personas, qué reacción generamos en ellas y el estímulo los invita a la acción deseada. Será de utilidad para medir los spot pautados tanto en TV como en redes sociales.   
                            </p>                            
                        </div>
                    </div>
                </div>  
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-left:1px;">
                    <h4 class="tipoEstudio" style="color:#EC2552;">Evaluación de Sesgos y Asociación Implícita</h4>
                    <ul style="padding-left: 15px;">
                        <li class="opcOtra">Correlación correcta entre concepto y significado</li>
                        <li class="opcOtra">Identificar actitudes y sentimientos no expresados</li>
                        <li class="opcOtra">Empatar la percepción con la acción</li>
                    </ul>
                    <br>
                    <div class="media">
                        <img class="d-flex align-self-center" src="./imgs/sesgos.png" alt="">

                        <div class="media-body">
                            <p class="benchmark">Aplicando protocolos de asociación implícita (IAT) y mediciones de electroencefalograma, se investigan preguntas que comúnmente tienen un alto nivel de sesgo para comprobar la relación que existe entre lo que se dice y lo que se piensa.</p>
                            <p class="benchmark">
                               La herramienta es muy útil para probar argumentos, imágenes y frases calificativas que representen una forma de pensar que ayudan al establecimiento de juicios colectivos.
                            </p>                                          
                        </div>
                    </div>
                </div>
            </div>                         
        </div>       
   </div> 
</div>

<div class="fondo-tinto">
    <div class="row" style="padding: 40px 10px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <p class="p-21 text-center" style="color:white;">Diseñamos instrumentos de  <span class="text-pink">investigación específicos</span>.</p>
            <p class="text-center" style="padding-top: 20px;" ><a style="color:white;border-color:white;" class="ver" href="">Solicitar Servicio</a></p> 
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<br><br><br>
<div class="container button-20">
    <div class="row">
        <div class="col-sm-12 text-center"><h2 class="otros">OTROS <span style="color:#EC2552;">SERVICIOS</span></h2></div>
         <div class="col-sm-6 col-md-6" style=";">
            <div class="div-img-container">
                <img src="./imgs/servicios-home/consultoria-politica.png" class="img-fluid mx-auto d-block" id="imgsConsu" alt="" style="">  
            </div>
            <br>
            <p class="text-center p-21 font-bold margin-top-30">Consultoría Política</p>
            <br> 
            <p class="text-center p-bottom"><a class="ver" href="consultoria-politica.php">VER SERVICIO</a></p> 
             <br>
        </div>
        <div class="col-sm-6 col-md-6" style=";">
            <div class="div-img-container">
                <img src="./imgs/servicios-home/promocion-activacion-politica.png" class="img-fluid mx-auto d-block" id="imgsConsu" alt="">
            </div>
            <br>
            <p class="text-center p-21 font-bold margin-top-30">Promoción y Activación política</p> 
            <br>
            <p class="text-center p-bottom"><a class="ver" href="promocion-activacion-politica.php">VER SERVICIO</a></p> 
            <br>
        </div>
    </div>
</div>
    <br>
    <br>
    <br>
    <br>

<div  id="contacto" style="background:#131C2E;">
   <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 col-sm-12 col-xs-12" id="infodiv" style="margin-bottom: 6%;border-right: 1px solid #95989A;padding-right: 0px !important;">
                       <p style="color:#fff;font-size:30px;font-weight: bold;margin-top:11%;">Contáctanos</p>  
                       <hr style="color: #EC2552;background-color: #EC2552;height: 5px;width:7%;margin-right: 96%;">                    
                       <p style="color:#fff;font-size:20px;" id="datoSitio"> <span style="font-size: 22px;"><a style="color:white;text-decoration:none;" target="_blank" href="https://api.whatsapp.com/send?phone=523339445826">+52 (33) 3944.5826</a></span> 
                       <br><a style="color:white;text-decoration:none;" href="mailto:jaimemartinez@templeconsulting.net?Subject=Consulta" target="_top">jaimemartinez@templeconsulting.net</a> <br>
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
                          <input type="text" class="form-control" id="nombre" placeholder="Nombre:*" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="telefono"  placeholder="Télefono:*" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email:*" name="email" required>
                        </div>
                        <div class="form-group">
                            <textarea style="resize: none;" class="form-control" id="mensaje" name="mensaje"rows="5" placeholder="Mensaje:*" required></textarea>
                        </div>
                        <input type="hidden" name="seccion" value="estudio opinion publica">
                        <div class="form-group">
                            <button class="enviar-button" style="background: #EC2552;color:#fff;cursor: pointer; border: none;">Enviar Mensaje</button>
                        </div>
                      </form>
                      <div id="formMessages" style="display:none;"></div>
                </div>
            </div>                        
        </div> 
    </div>                        
    </div>  
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

@push('scripts')
<script>
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
    $('nav').hide();
  }else{
    $('nav').show();
  }
})


</script>
@endpush
@stop