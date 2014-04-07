<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
        <script src="js/funcionesLogin.js" type="text/javascript"></script>
        <link href="css/custom-theme/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
        <link href="css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="contenedorLog" class="ui-corner-all">
            <table border="0" class="ui-widget" id="tablaLog" cellpadding="5">
                <tr>
                    <td colspan="2" style="text-align: center;"><h1>Bienvenido!</h1></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Usuario:</td><td><input type="text" id="usr" /></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Contraseña:</td><td><input type="password" id="pwd" /></td>
                </tr>
                <tr>
                    <td colspan="2"><center><span id="enviar"> Ingresar </span></center></td>
                </tr>
            </table>
            <div id="error" class="ui-state-error ui-corner-all" style="display:none;"></div>
        </div>
    </body>
</html>
