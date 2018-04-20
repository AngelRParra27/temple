@extends('adminPanel', ['menu' => $menu, 'section' => $section])
@section('contenido')
<div id="inicio" class="back-img-home">
    <div class="test"> 
        <span id="titulo" class="titulo"><span id="editar" class="fa fa-edit fa-sm button" data-toggle="modal" data-target="#exampleModal"></span>{!!nl2br($banner->titulo)!!}</span><br>
        <span id="subtitulo" class="sub"  id="spann">{!!nl2br($banner->subtitulo)!!}</span><br>
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
        <textarea id="tit" class="form-control" type="text" name="titulo" value="">{{$banner->titulo}}</textarea> 
        <label>Subtitulo</label>
        <textarea id="sub" class="form-control" type="text">{{$banner->subtitulo}}</textarea> 
      </div>
      <div class="modal-footer">
        <button id="guardar" type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@stop()

@section('script')
  <script>
    $('#guardar').on('click', function(){
      $('#titulo').html($('#tit').val().replace(/\n/g,'<br />'));
      $('#subtitulo').html($('#sub').val().replace(/\n/g,'<br />'));
  })
</script>
@endsection