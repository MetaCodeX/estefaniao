<?php
print  "<p> Programa para manejo de contadores </p> \n ";
echo "Inicio del contador";
$contador = 0;
for($i = 0; $i< 3; $i ++) { 
    $Dado = rand(1,6);
    print "<p> Tirada de dado: ".$Dado. " </p> \n";
    if ($Dado == 5) {
        $contador ++;
    }
}
print"Aparecieron $contador cinco (s).</p> \n";
print "<p>Fin del contador</p>\n";

?>
<br>
<a href="https://soportetuxpan.com.mx/estefaniao/final2/">Volver</a>