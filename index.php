<?php
session_start();
if(!isset($_SESSION['usr'])){
    $ban=false;
    Header ("Location: login.php"); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
        <script src="js/funcionesGeneral.js" type="text/javascript"></script>
        <link href="css/custom-theme/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
        <link href="css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="head">
            <table style="width:100%">
                <tr>
                    <td>Logo</td>
                </tr>
                <tr>
                    <td>
                        <ul id="menu">
                            <li><span onclick="desplegar('compromisos');">Compromisos</span></li>
                            <li><span onclick="desplegar('directorio');">Directorio</span></li>
                            <li><span onclick="desplegar('trabajos');">Trabajos</span></li>
                            <li><span onclick="desplegar('work');">Work Flow</span></li>
                            <li><span onclick="desplegar('avisos');">Avisos</span></li>
                            <li><span onclick="desplegar('admin');">Administrador</span></li>
                            <li><span onclick="desplegar('seguridad');">Seguridad</span></li>
                            <li><span onclick="desplegar('encriptacion');">Encriptación</span></li>
                            <li><span onclick="desplegar('general');">General</span></li>
                            <li><span onclick="desplegar('logout');">Cerrar Sesión</span></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="ui-widget" style="text-align: right;"><p style="margin-top:0px;"><b>Bienvenido</b>: <?php echo $_SESSION['usr'];?></p></td>
                </tr>
            </table>
        </div>
        <div id="mainContent">
            
        </div>
    </body>
</html>
