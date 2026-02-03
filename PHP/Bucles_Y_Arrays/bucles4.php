<?php 
$numero1 = 0;
$numero2 = 1;

echo "serie fibonacci son los primeros numeros hasta el 15";
for ($i = 1; $i <= 15; $i++) {
    echo "$numero1";
    $siguientenumero = $numero1 + $numero2;
    $numero1 = $numero2;
    $numero2 = $siguientenumero;
}
?>