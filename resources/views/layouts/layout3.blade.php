@extends('adminPanel')
@section('contenido')
<style>
  .button{
    color: black;
    width: 20px;
  }
  .linea{
    font-weight: bold;
    width: 80%;

    margin-left: 15px;
    border: none;
    /* border-bottom: solid grey 1px; */
  }
  .linea-morada{
    font-weight: bold;
    width: 80%;

    margin-left: 15px;
    border: none;
    color: #ad073d;
    /* border-bottom: solid grey 1px; */
  }
</style>
<div id="casos" class="container" style=" display:flex; justify-content: center; flex-direction: column;">
    <div class="adorno-title">
       <h2 id="edit_1" class="text-center center-title font-bold title-margin-top"><span class="fa fa-edit button"></span>{{$home->layout3->titulo}}</h2>
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
           <p id="edit_2" class="p-21 text-center text-black font-bold line-height-dot-5">
              <span class="fa fa-edit button"></span>
              <span id="titulo2_1"></span>
           </p>
           <p class="p-21 text-center font-bold text-pink line-height-dot-5">
               <span id="titulo2_2"></span>
           </p>
           <p class="text-center font-bold text-pink line-height-dot-5">
               <span id="titulo2_3"></span>
           </p>
           <p class="text-gray text-center">
               {{$home->layout3->texto2}}
           </p>
       </div>
       <div class="col-sm-6 col-md-4">
            <p id="edit_3" class="p-21 text-center text-black font-bold line-height-dot-5">
               <span class="fa fa-edit button"></span>
              <span id="titulo3_1"></span>
            </p>
            <p id="" class="p-21 text-center font-bold text-pink line-height-dot-5">
               <span id="titulo3_2"></span>
           </p>
           <p class="text-center font-bold text-pink line-height-dot-5">
               <span id="titulo3_3"></span>
           </p>
           <p class="text-gray text-center">
               {{$home->layout3->texto3}}
           </p>
       </div>
       <div class="col-sm-6 col-md-4">
            <p id="edit_4" class="p-21 text-center text-black font-bold line-height-dot-5">
              <span class="fa fa-edit button"></span>
              <span id="titulo4_1"></span>
             </p>
             <p class="p-21 text-center font-bold text-pink line-height-dot-5">
              <span id="titulo4_2"></span>
           </p>
           <p class="text-center font-bold text-pink line-height-dot-5">
               <span id="titulo4_3"></span>
           </p>
           <p class="text-gray text-center">
               {{$home->layout3->texto4}}
           </p>
       </div>
    </div>
</div>
{{--Modal--}}
<div id="modal1" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Titulo</label>
        <input id="titulo" class="form-control" type="text" name="titulo" value="{{$home->layout3->titulo}}">
        <label>Contenido</label>
        <textarea id="texto" class="form-control" type="text" name="texto" style="height:150px">{{$home->layout3->texto}}</textarea> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div id="modal2" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Titulo</h5>
        <div class="form-inline">
          <label>Linea 1:</label><input id="titulo2_linea1" class="form-control linea" type="text" name="linea1" value="RESULTADOS" >
        </div>
        <div class="form-inline">
          <label>Linea 2:</label><input id="titulo2_linea2" class="form-control linea-morada" type="text" name="linea2" value="98% Confiables" >
        </div>
        <div class="form-inline">
          <label>Linea 3:</label><input id="titulo2_linea3" class="form-control linea-morada" type="text" name="linea3" value="en encuestas" >
        </div>
        <label>Contenido</label>
        <textarea id="texto2" class="form-control" type="text" name="texto2" style="height:150px">{{$home->layout3->texto2}}</textarea> 
      <div class="modal-footer">
        <button id="guardar_2" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>

<div id="modal3" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Titulo</h5>
        <div class="form-inline">
          <label>Linea 1:</label><input id="titulo3_linea1" class="form-control linea" type="text" name="linea1" value="CON MÁS DE " >
        </div>
        <div class="form-inline">
          <label>Linea 2:</label><input id="titulo3_linea2" class="form-control linea-morada" type="text" name="linea2" value="14 años" >
        </div>
        <div class="form-inline">
          <label>Linea 3:</label><input id="titulo3_linea3" class="form-control linea-morada" type="text" name="linea3" value="de experiencia" >
        </div>
        <label>Contenido</label>
        <textarea id="texto3" class="form-control" type="text" name="texto2" style="height:150px">{{$home->layout3->texto3}}</textarea> 
      <div class="modal-footer">
        <button id="guardar_3" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>

<div id="modal4" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Titulo</h5>
        <div class="form-inline">
          <label>Linea 1:</label><input id="titulo4_linea1" class="form-control linea" type="text" name="linea1" value="90%" >
        </div>
        <div class="form-inline">
          <label>Linea 2:</label><input id="titulo4_linea2" class="form-control linea-morada" type="text" name="linea2" value="DE OBJETIVOS" >
        </div>
        <div class="form-inline">
          <label>Linea 3:</label><input id="titulo4_linea3" class="form-control linea-morada" type="text" name="linea3" value="planeados se han cumplido" style="width: 70%">
        </div>
        <label>Contenido</label>
        <textarea id="texto4" class="form-control" type="text" name="texto2" style="height:150px">{{$home->layout3->texto4}}</textarea> 
      <div class="modal-footer">
        <button id="guardar_4" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>

<script>
    var id = {!! json_encode($home->section_3)!!};
    var titulo2 = {!! json_encode($home->layout3->titulo2)!!};
    var titulo3 = {!! json_encode($home->layout3->titulo3)!!};
    var titulo4 = {!! json_encode($home->layout3->titulo4)!!};
  $(document).ready(function(){
      var titulo_1= titulo2.split('/#');
      var titulo_2= titulo3.split('/#');
      console.log(titulo_2)
      var titulo_3= titulo4.split('/#');
      $('#titulo2_1').text(titulo_1[0]);
      $('#titulo2_2').text(titulo_1[1]);
      $('#titulo2_3').text(titulo_1[2]);
      $('#titulo3_1').text(titulo_2[0]);
      $('#titulo3_2').text(titulo_2[1]);
      $('#titulo3_3').text(titulo_2[2]);
      $('#titulo4_1').text(titulo_3[0]);
      $('#titulo4_2').text(titulo_3[1]);
      $('#titulo4_3').text(titulo_3[2]);
  })    
  $(document).on('click', '#edit_1', function(){
    $('#modal1').modal('show');
  })
  $(document).on('click', '#edit_2', function(){
    $('#modal2').modal('show');
  })
  $(document).on('click', '#edit_3', function(){
    $('#modal3').modal('show');
  })
  $(document).on('click', '#edit_4', function(){
    $('#modal4').modal('show');
  })
  $('#guardar_2').on('click', function(){
    var titulo = $('#titulo2_linea1').val() + "/#"+ $('#titulo2_linea2').val() + "/#"+ $('#titulo2_linea3').val();   

    console.log(titulo)
  })
  $('#guardar_2').on('click', function(){
    var titulo = $('#titulo2_linea1').val() + "/#"+ $('#titulo2_linea2').val() + "/#"+ $('#titulo2_linea3').val();   

    console.log(titulo)
  })

  $('#guardarCambios').on('click',  function(){  
    var titulo2 = $('#titulo2_linea1').val() + "/#"+ $('#titulo2_linea2').val() + "/#"+ $('#titulo2_linea3').val();   
    var titulo3 = $('#titulo3_linea1').val() + "/#"+ $('#titulo3_linea2').val() + "/#"+ $('#titulo3_linea3').val();   
    var titulo4 = $('#titulo4_linea1').val() + "/#"+ $('#titulo4_linea2').val() + "/#"+ $('#titulo4_linea3').val();   
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: 'PUT',
    url: '{{url('layout3')}}' + '/' + id,
    data:{
      'titulo': $('#titulo').val(),
      'titulo2': titulo2,
      'titulo3': titulo3,
      'titulo4': titulo4,
      'texto': $('#texto').val(),
      'texto2': $('#texto2').val(),
      'texto3': $('#texto3').val(),
      'texto4': $('#texto4').val(),
    },
    success: function(data){
      console.log(data)
    }  
  })
})

</script>
@stop()