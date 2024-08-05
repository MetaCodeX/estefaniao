<?php
print  "<p> Numeros pares o impares <br> ";
echo "numero ";
$i= rand(0,20);
if ($i % 2 == 0) {
    echo "$i es par<br>";
} else {
    echo "$i es impar<br>";
}
?>
