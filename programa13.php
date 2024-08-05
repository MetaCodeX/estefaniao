<?php
print  "<p> Ejemplo de acumulador </p> \n ";
print" Cada juego vale $2 </p> \n";
echo "Inicio ";
$total = 0;
for($i = 0; $i< 3; $i ++) { 
    $Dado = rand(1,6);
    print "<p> Tirada de dado: ".$Dado. " </p> \n";
    $total = $total + $Dado;
}
print" <p> Ganaste una cantidad de $total puntos.</p> \n";
print" Si juntas mas de 16 puntos ganas $10 </p> \n";
print "<p>Fin</p>\n";

?>
<br>
<a href="https://soportetuxpan.com.mx/estefaniao/final2/">Volver</a>