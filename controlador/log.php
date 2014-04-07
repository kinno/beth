<?php
session_start();
if($_POST['accion']=='login'){
    
    $nombre = $_POST['nombre'];
    $pwd = $_POST['pwd'];

    if($nombre==''||$pwd==''){
        echo 'error';
    }
    else{
      $_SESSION['usr']=$nombre;  
        echo 'ok';
    }
    
}else if($_POST['accion']=='logout'){
    session_destroy();
    echo 'ok';
}
?>
