$(document).ready(function(){
    $(".crear-tendero").on("click", function(e){
        
        var data = $(this).serialize();
        var boton = $("#crear-tendero").get(0);
        var l = Ladda.create(boton);
        l.start();

        console.log(data)
        $.ajax({

            url:baseUrl+"tenderos/create",
            method:"POST",
            data:data,

            success:function(r){

                
                l.stop();
            },error:function(){
                l.stop();
            }
        });


    });
});