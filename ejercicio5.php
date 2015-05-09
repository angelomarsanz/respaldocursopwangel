<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Ejercicio 1 de programación web">
<meta content="width=device-width, initial-scale=1, minimum-scale=1" name="viewport">
<meta name="keywords" content="Programación, web">
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<title>Ejercicio 1 de Programación web</title>
<link href="movil.css" rel="stylesheet" media="all and (min-width:0px) and (max-width: 480px)" />
<link href="tablet.css" rel="stylesheet" media="all and (min-width: 481px) and (max-width: 800px)" />
<link href="escritorio.css" rel="stylesheet" media="all and (min-width: 801px)" />
</head>
<body>
<?php
if (!$HTTP_POST_VARS){
?>
<form action="envia_form_php.php" method=post>
Nombre: <input type=text name="nombre" size=16>
<br>
Email: <input type=text name=email size=16>
<br>
Comentarios: <textarea name=coment cols=32 rows=6></textarea>
<br>
<input type=submit value="Enviar">
</form>
<?
}else{
    //Estoy recibiendo el formulario, compongo el cuerpo
    $cuerpo = "Formulario enviado\n";
    $cuerpo .= "Nombre: " . $HTTP_POST_VARS["nombre"] . "\n";
    $cuerpo .= "Email: " . $HTTP_POST_VARS["email"] . "\n";
    $cuerpo .= "Comentarios: " . $HTTP_POST_VARS["coment"] . "\n";

    //mando el correo...
    mail("admin@tudominio.com","Formulario recibido",$cuerpo);

    //doy las gracias por el envío
    echo "Gracias por rellenar el formulario. Se ha enviado correctamente.";
}
?>
</body>
</html>
