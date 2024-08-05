<?php

echo " 10 NUMEROS PARES <br><br>";
echo "Paso 0 inicio <br>";
echo "Paso 1: Definir los numeros pares.<br>";
echo "Paso 2: Para saber si un numero es par se debe de dividir entre dos y el residuo debe de dar 0<br>";
echo "Paso 3: Imprimir los primeros 10 números.<br>";
echo "Paso 4: Fin.<br>";

echo "Imprimir numeros: <br>";
$numero_pares = 0;
$i = 0;

while ($numero_pares < 10) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
        $numero_pares++;
    }
    $i++;
}

?>
<br>
<a href="https://soportetuxpan.com.mx/estefaniao/final2/">Volver</a>
