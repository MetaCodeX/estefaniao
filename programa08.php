<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicion</title>
</head>
<body>
    <h3 style="background-color: coral;">Presentacion de condicion</h3>
    <p>Se traduce el diagrama de flujo</p>
    <?php
    $camisa=true;
    echo"se presenta la solicitud del cambio:<br>";
    if ($camisa==true) {//Es importante diferenciar entre el igualar y el asignar
        echo"Se localizo el modelo y seguira a realizar el cambio<br>";
    }else {
        echo"Se pedira a una sucursal<br>";
    }
    echo"<br><h3>Se traduce el diagrama de flujo del cambio de color</h3>";
    $color=true;
    echo"se presenta la solicitud del cambio:<br>";
    if ($color==true) {
        echo"el color del articulo se encuentra disponible";
    }else {
        echo"Se pedira a una sucursal";
    }
    ?>
    <br>
<a href="https://soportetuxpan.com.mx/estefaniao/final2/">Volver</a>
</body>
</html>