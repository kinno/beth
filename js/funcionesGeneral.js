$(document).ready(function(){
   
});

function desplegar(seccion){
    switch (seccion){
        case 'compromisos':
                        var url="vCompromisos.php"; 
                        $.post(url,{},function(response){
                                    $("#mainContent").html(response);
                                });
                        break;
        case 'logout':
                        var url="controlador/log.php";
                        var accion='logout';
                        $.post(url,{accion:accion},function(response){
                                    if(response=='ok'){
                                        $(location).attr('href','index.php');
                                    }
                                });
                        break;
    }
}

