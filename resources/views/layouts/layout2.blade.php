@extends('adminPanel')
@section('contenido')
<style>
  .button{
    color: black;
    width: 20px;
  }
</style>
<div id="servicios"  style=" display:flex; justify-content: center; flex-direction: column; position:relative;">
    <div class="adorno-title">
       <h2 id="edit_1" class="text-center center-title font-bold title-margin-top"><span  style="cursor: pointer;" class="fa fa-edit button"></span>Nuestros&nbsp;&nbsp;&nbsp;<span class="text-pink ">Servicios</span></h2>
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
                <img id="imagen_1" src="./imgs/servicios-home/consultoria-politica.png" class="img-fluid mx-auto d-block img-width" id="imgsConsu"  alt="" style="">  
            </div>
            <br> 
            <p id="edit_2" class="text-center p-21 font-bold"><span class="fa fa-edit button"></span>{{$home->layout2->nombre}}</p>
            <br> 
            <p class="text-center p-bottom"><a class="ver">VER SERVICIO</a></p> 
             <br>
        </div>
        <div class="col-sm-6 col-md-4" style=";">
            <div class="">
                <img src="./imgs/servicios-home/opinion-publica.png" class="img-fluid mx-auto d-block img-width" id="imgsConsu" alt=""  style="padding-top:35px;">  
            </div>
            <br>
            <p id="edit_3" class="text-center p-21 font-bold "><span class="fa fa-edit button"></span>{{$home->layout2->nombre2}}</p>
            <br>
            <p class="text-center p-bottom"><a class="ver" >VER SERVICIO</a></p> 
            <br>
        </div>
        <div class="col-sm-6 col-md-4" style=";">
            <div class="">
                <img src="./imgs/servicios-home/promocion-activacion-politica.png" class="img-fluid mx-auto d-block img-width"  id="imgsConsu" alt="">
            </div>
            <br>
            <p id="edit_4" class="text-center p-21 font-bold"><span class="fa fa-edit button"></span>{{$home->layout2->nombre3}}</p> 
            <br>
            <p class="text-center p-bottom"><a class="ver" >VER SERVICIO</a></p> 
             <br>
        </div>     
    </div>
    </div>
     <br> <br>
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
        <input class="form-control" type="text" name="titulo" value="Nuestros servicios">
        <label>Contenido</label>
        <textarea class="form-control" type="text" name="texto" style="height:150px">{{$home->layout2->texto}}</textarea> 
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
        <label>Titulo</label>
        <input class="form-control" type="text" name="nombre" value="{{$home->layout2->nombre}}">
        <label>Imagen</label>
        <input id="img" class="form-control" type="file" name="img">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
        <label>Titulo</label>
        <input class="form-control" type="text" name="nombre2" value="{{$home->layout2->nombre2}}">

        <label>Imagen</label>
        <input id="img2" class="form-control" type="file" name="img2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
        <label>Titulo</label>
        <input class="form-control" type="text" name="nombre3" value="{{$home->layout2->nombre3}}">

        <label>Imagen</label>
        <input id="img3" class="form-control" type="file" name="img3">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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


 $("#img").change(function() {
   readURL(this);
 });
  
 function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#imagen_1').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

</script>
@stop()
