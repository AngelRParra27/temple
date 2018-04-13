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
       <h2 id="edit_1" class="text-center center-title font-bold title-margin-top">
        <span  style="cursor: pointer;" class="fa fa-edit button">&nbsp;&nbsp;&nbsp;</span>
       <span id="titulo_1"> @foreach($titulo[0] as $palabra) {{$palabra}} @endforeach</span>
        <span id="titulo_2" class="text-pink "> @foreach($titulo[1] as $palabra) {{$palabra}} @endforeach</span></h2>
    </div>
   
    <div class="row" style="">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
                <p id="texto_1" class="text-center p-21">{{$home->layout2->texto}}</p>
        </div>
        <div class="col-sm-2"></div>
    </div>
     <div class="container">
  <div class="row">
        <div class="col-sm-6 col-md-4" style=";">
            <div class="">
                <img src="./imgs/servicios-home/consultoria-politica.png" class="img-fluid mx-auto d-block img-width" id="imgs1"  alt="" style="">  
            </div>
            <br> 
            <p id="edit_2" class="text-center p-21 font-bold"><span class="fa fa-edit button"></span>{{$home->layout2->nombre}}</p>
            <br> 
            <p class="text-center p-bottom"><a class="ver">VER SERVICIO</a></p> 
             <br>
        </div>
        <div class="col-sm-6 col-md-4" style=";">
            <div class="">
                <img src="./imgs/servicios-home/opinion-publica.png" class="img-fluid mx-auto d-block img-width" id="imgs2" alt=""  style="padding-top:35px;">  
            </div>
            <br>
            <p id="edit_3" class="text-center p-21 font-bold "><span class="fa fa-edit button"></span>{{$home->layout2->nombre2}}</p>
            <br>
            <p class="text-center p-bottom"><a class="ver" >VER SERVICIO</a></p> 
            <br>
        </div>
        <div class="col-sm-6 col-md-4" style=";">
            <div class="">
                <img src="./imgs/servicios-home/promocion-activacion-politica.png" class="img-fluid mx-auto d-block img-width"  id="imgs3" alt="">
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
        <button id="guardar_1" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
{{--Modal2--}}
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
        <input id="img1" class="form-control" type="file" name="img">
      </div>
      <div class="modal-footer">
        <button id="guardar_2" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
{{--Modal3--}}
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
        <button id="guardar_3" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
{{--Modal3--}}
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
        <button id="guardar_4" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<script>
  var id = {!! json_encode($home->section_2)!!};

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

  $('#guardar_1').click(function(){
     var titulo = $('[name="titulo"]').val();
     titulo = titulo.split(" ");
     titulo1 =titulo.splice(0,   Math.ceil(titulo.length / 2)).toString().replace(',', " ");
     titulo2 = titulo.toString().replace(',', " ");
    $('#titulo_1').text(titulo1);
    $('#titulo_2').text(titulo2);
    $('#texto_1').text($('[name="texto"]').val());
  })
  $('#guardar_2').click(function(){
    $('#edit_2').text($('[name="nombre"]').val());
  })
  $('#guardar_3').click(function(){
    $('#edit_3').text($('[name="nombre2"]').val());
  })
  $('#guardar_4').click(function(){
    $('#edit_4').text($('[name="nombre3"]').val());
  })

 $("#img1").change(function() {

   readURL(this, 'imgs1');
 });
 $("#img2").change(function() {

   readURL(this, 'imgs2');
 });
 $("#img3").change(function() {

   readURL(this, 'imgs3');
 });
  
  
 function readURL(input, id) {
  var id= id;
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      alert(id)
      $('#'+id).attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}
$('#guardarCambios').on('click',  function(){
  var formData = new FormData();
  var file1 = $('#img1').prop('files')[0]; 
  var file2 = $('#img2').prop('files')[0];   
  var file3= $('#img3').prop('files')[0];  
  formData.append('img',file1);
  formData.append('img2',file2);
  formData.append('img2',file3);
  formData.append('titulo', $('[name="titulo"]').val())
  formData.append('texto', $('[name="texto"]').val())
  formData.append('nombre', $('[name="nombre"]').val())
  formData.append('nombre2', $('[name="nombre2"]').val())
  formData.append('nombre3', $('[name="nombre3"]').val())
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: 'POST',
    url: '{{url('updateLayout2')}}' + '/' + id,

    contentType: false,
    processData: false,
    data:formData,
    success: function(data){
      console.log(data)
    }  
  })
})

 

</script>
@stop()
