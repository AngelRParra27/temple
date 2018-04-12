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
              <span class="fa fa-edit button"></span>RESULTADOS
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
            <p id="edit_3" class="p-21 text-center text-black font-bold line-height-dot-5">
              <span class="fa fa-edit button"></span>CON MÁS DE
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
            <p id="edit_4" class="p-21 text-center text-black font-bold line-height-dot-5">
              <span class="fa fa-edit button"></span>90%
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
        <input class="form-control" type="text" name="titulo" value="{{$home->layout3->titulo}}">
        <label>Contenido</label>
        <textarea class="form-control" type="text" name="texto" style="height:150px">{{$home->layout3->texto}}</textarea> 
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
          <label>Linea 1:</label><input id="linea1" class="form-control linea" type="text" name="linea1" value="RESULTADOS" >
        </div>
        <div class="form-inline">
          <label>Linea 2:</label><input id="linea2" class="form-control linea-morada" type="text" name="linea2" value="98% Confiables" >
        </div>
        <div class="form-inline">
          <label>Linea 3:</label><input id="linea3" class="form-control linea-morada" type="text" name="linea3" value="en encuestas" >
        </div>
        <label>Contenido</label>
        <textarea class="form-control" type="text" name="texto2" style="height:150px">{{$home->layout3->texto2}}</textarea> 
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
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
          <label>Linea 1:</label><input id="linea1" class="form-control linea" type="text" name="linea1" value="CON MÁS DE " >
        </div>
        <div class="form-inline">
          <label>Linea 2:</label><input id="linea2" class="form-control linea-morada" type="text" name="linea2" value="14 años" >
        </div>
        <div class="form-inline">
          <label>Linea 3:</label><input id="linea3" class="form-control linea-morada" type="text" name="linea3" value="de experiencia" >
        </div>
        <label>Contenido</label>
        <textarea class="form-control" type="text" name="texto2" style="height:150px">{{$home->layout3->texto3}}</textarea> 
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
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
          <label>Linea 1:</label><input id="linea1" class="form-control linea" type="text" name="linea1" value="90%" >
        </div>
        <div class="form-inline">
          <label>Linea 2:</label><input id="linea2" class="form-control linea-morada" type="text" name="linea2" value="DE OBJETIVOS" >
        </div>
        <div class="form-inline">
          <label>Linea 3:</label><input id="linea3" class="form-control linea-morada" type="text" name="linea3" value="planeados se han cumplido" style="width: 70%">
        </div>
        <label>Contenido</label>
        <textarea class="form-control" type="text" name="texto2" style="height:150px">{{$home->layout3->texto4}}</textarea> 
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>

<script>
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
</script>
@stop()