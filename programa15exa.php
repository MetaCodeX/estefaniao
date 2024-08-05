<?php
print  "<p> Menu de opciones de programacion <br> ";
if($i == 0) { 
    echo "i es igual a 0 <br>";
}
else if ($i==1) {
    echo "i es igual a 1 <br>";
}
else if ($i==2) {
    echo "i es igual a 2 <br>";
}
else if ($i==3) {
    echo "i es igual a 3 <br>";
}
else if ($i==4) {
    echo "i es igual a 4 <br>";
}
?><?php
$i= rand(0,4);
echo "opciones <br>";
switch($i){
	case 0: 
	echo"OPCION 1 ABRIR <br>";
	break;
	case 1: 
	echo"OPCION 2 NUEVO <br>";
	break;
	case 2: 
	echo"OPCION 3 GUARDAR <br>";
	break;
    case 3: 
    echo"OPCION 4 GUARDAR COMO <br>";
    break;
    case 4: 
    echo"OPCION 5 SALIR \n";
    break;
}
?>
