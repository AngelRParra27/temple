    $(document).ready(function(){
        if($(window).width() < 850){
            $('ul').css('background-color', "#131c2f57");
            $('#mobile').show();
            $('#desktop').hide();
        }else{
            $('#mobile').hide();
            $('#desktop').show();
        }
    });
    
    $(window).scroll(function(event){
    var st = $(this).scrollTop();
    if(st > 0){
        $('nav').css('background-color', "#131c30");
        $('ul').css('background-color', "");

    }else{
        $('nav').css('background-color', "");
         if($(window).width() < 850){

        $('ul').css('background-color', "#131c30");
        }else{
             $('ul').css('background-color', "");
        }
    }
    });

   $(document).on('click', '.contacto-link', function(){
        $('.collapse').collapse("hide");
    })

   $('.navbar-toggler').click(function(){
    $('nav').css('background-color', "#131c30");
   })

    $('.navbar-nav>li>a').on('click', function(){
      $('.navbar-collapse').collapse('hide');
    });
   
 

    if($(window).width() < 850){
            $('ul').css('background-color', "#131c2f57");
            $('#mobile').show();
            $('#desktop').hide();
        }else{
            $('#mobile').hide();
            $('#desktop').show();
        }
