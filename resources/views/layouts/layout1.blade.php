@extend('index.blade.php')
@section('layout1')
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
@stop()