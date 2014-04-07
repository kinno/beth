$(document).ready(function(){
    $("#enviar").button({icons:{primary:'ui-icon-check'}}).click(function(){
        verificaLogin();
    });
});

function verificaLogin(){
    var url="controlador/log.php";
    var nombre = $("#usr").val();
    var pwd = $("#pwd").val();
    var accion='login';
    $.post(url,{accion:accion,nombre:nombre,pwd:pwd},function(response){
        if(response=='ok'){
            $(location).attr('href','index.php');
        }else{
            $("#error").show().html("El ususario y/o password son incorrenctos!");
            
        }
    });
}