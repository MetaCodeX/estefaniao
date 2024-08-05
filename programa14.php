<?php
print  "<p> Programa para manejo de contadores </p> \n ";
echo "Calificaciones";

// Generar una calificación aleatoria entre 0 y 100
$calificacion = rand(0, 100);
echo "<p>Calificación: $calificacion</p>";

if ($i == 0) { 
} else if ($i == 1) {
    echo "i es igual a 1";
} else if ($i == 2) {
    echo "i es igual a 2";
}

switch (true) {
    case ($calificacion >= 90 && $calificacion <= 100):
        echo "<p>Excelente</p>";
        break;
    case ($calificacion >= 80 && $calificacion <= 89):
        echo "<p>Buena</p>";
        break;
    case ($calificacion >= 60 && $calificacion <= 79):
        echo "<p>Regular</p>";
        break;
    case ($calificacion >= 0 && $calificacion <= 59):
        echo "<p>Reprobatoria</p>";
        break;
}
?>
<br>
<a href="https://soportetuxpan.com.mx/estefaniao/final2/">Volver</a>
