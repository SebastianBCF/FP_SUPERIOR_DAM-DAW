<?php
echo "Ingrese un numero";
$numero = (int) trim(fgets(STDIN));

if ($numero % 2 == 0 ) {
    echo "el numero $numero es par";
}else{ 
    echo "el numero $numero es inpar";
}
?>