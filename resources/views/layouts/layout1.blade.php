@extends('adminPanel')
@section('contenido')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
  .button{
    color: black;
    width: 20px;
  }
</style>
<div id="compania"  style="background-color:#f9f9f9;  display:flex; justify-content: center; flex-direction: column;">
    <div class="adorno-title">
    </div>
    <div class="container " >
        <div class="row bottom-20">
            <div class="col-sm-12">
                <h2 id="edit_1" class="text-center" style="color:#71002f;font-weight:bold;"><span class="fa fa-edit fa-sm button"></span>{{$home->layout1->titulo}}</h2>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <p id="texto_1" class="text-center p-21">{!!nl2br($home->layout1->texto)!!}</p>
            </div>
            <div class="col-sm-2"></div>
        </div>    
    </div>
    
    <div class="container ">
        <div class="row " >
        
            <div class="col-md-6">
              <h3 id="edit_2" class="font-bold"><span class="fa fa-edit button"></span>{{$home->layout1->titulo2}}</h3>
                <div class="row">
                  <div class="col-md-3 text-center">
                    <img id="img_1" src="./imgs/{{$home->layout1->img2}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-9">
                   <p id="texto_2" class="text-gray">{!!nl2br($home->layout1->texto2)!!}</p> 
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 id="edit_3" class="font-bold"><span class="fa fa-edit button"></span>{{$home->layout1->titulo3}}</h3>
                <div class="row">
                  <div class="col-md-3 text-center">
                    <img id="img_2" src="./imgs/{{$home->layout1->img3}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-9">
                    <p id="texto_3" class="text-gray">{{$home->layout1->texto3}}</p>
                  </div>
                </div>
            </div>
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
        <input  id="titulo" class="form-control" type="text" name="titulo" value="{{$home->layout1->titulo}}">
        <label>Contenido</label>
        <textarea id="texto1" class="form-control" type="text" name="texto" style="height:150px">{{$home->layout1->texto}}</textarea> 
      </div>
      <div class="modal-footer">
        <button id="guardar_1" type="submit" class="btn btn-primary">Guardar Cambios</button>
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
        <form id="sec2">
        <label>Titulo</label>
        <input id="titulo2" class="form-control" type="text" name="titulo2" value="{{$home->layout1->titulo2}}">
        <label>Contenido</label>
        <textarea id="texto2" class="form-control" type="text" name="texto2" style="height:150px">{{$home->layout1->texto2}}</textarea> 
        <label>Imagen</label>
        <input id="img2"  class="form-control" type="file" name="img2">
        </form>
      </div>
      <div class="modal-footer">
        <button id="guardar_2" type="button" class="btn btn-primary">Guardar Cambios</button>
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
        <input id="titulo3" class="form-control" type="text" name="titulo3" value="{{$home->layout1->titulo3}}">
        <label>Contenido</label>
        <textarea id="texto3" class="form-control" type="text" name="texto3" style="height:150px">{{$home->layout1->texto3}}</textarea> 
        <label>Imagen</label>
        <input id="img3" class="form-control" type="file" name="img3">
      </div>
      <div class="modal-footer">
        <button id="guardar_3" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>
   var id = {!! json_encode($home->section_1)!!};

  $(document).on('click', '#edit_1', function(){
    $('#modal1').modal('show');
  })
  $(document).on('click', '#edit_2', function(){
    $('#modal2').modal('show');
  })
  $(document).on('click', '#edit_3', function(){
    $('#modal3').modal('show');
  })
  $(document).on('click', '#guardar_1', function(){
    $('#edit_1').text($('#titulo').val());
    $('#texto_1').text($('#texto1').val());
    $('#modal1').modal('hide');
  })
  $(document).on('click', '#guardar_2', function(){
    $('#edit_2').text($('#titulo2').val());
    $('#texto_2').text($('#texto2').val());
    $('#modal2').modal('hide');
  })
    $(document).on('click', '#guardar_3', function(){
    $('#edit_3').text($('#titulo3').val());
    $('#texto_3').text($('#texto3').val());
    $('#modal3').modal('hide');
  })
 $("#img2").change(function() {

   readURL(this, 'img_1');
 });
 $("#img3").change(function() {

   readURL(this, 'img_2');
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
  var file1 = $('#img2').prop('files')[0];   
  var file2 = $('#img3').prop('files')[0];  
  formData.append('img2',file1);
  formData.append('img3',file2);
  formData.append('texto', $('[name="texto"]').val())
  formData.append('texto2', $('[name="texto2"]').val())
  formData.append('texto3', $('[name="texto3"]').val())
  formData.append('titulo', $('[name="titulo"]').val())
  formData.append('titulo2', $('[name="titulo2"]').val())
  formData.append('titulo3', $('[name="titulo3"]').val())
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: 'POST',
    url: '{{url('updateLayout1')}}' + '/' + id,

    contentType: false,
    processData: false,
    data:formData,
    success: function(data){
      console.log(actualizado)
    }  
  })
})


</script>
@stop()