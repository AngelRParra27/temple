@extends('adminPanel')
@section('contenido')
<div id="inicio" class="back-img-home" style="position:relative ;z-index:999 ;">
    <div class="test"> 
        <span id="titulo" class="titulo"><span id="editar" class="fa fa-edit fa-sm button"></span>{!!nl2br($home->banner->titulo)!!}</span><br>
        <span id="subtitulo" class="sub"  id="spann">{!!nl2br($home->banner->subtitulo)!!}</span><br>
           <br>
        <br>
        <br>
        <a id="contact" href="./#contacto" class="solici">Solicitar información</a>
    </div>
    <br>
      
</div>

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
        <textarea id="tit" class="form-control" type="text" name="titulo" value="">{{$home->banner->titulo}}</textarea> 
        <label>Subtitulo</label>
        <textarea id="sub" class="form-control" type="text" name="subtitulo" style="height:150px">{{$home->banner->subtitulo}}</textarea> 
      </div>
      <div class="modal-footer">
        <button id="guardar" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script>
	$(document).on('click', '#editar', function(){
		$('#modal1').modal('show');
	})
	$('#guardar').on('click', function(){
		$('#titulo').html($('#tit').val().replace(/\n/g,'<br />'));
		$('#subtitulo').html($('#sub').val().replace(/\n/g,'<br />'));
	})
</script>
@stop()