<?php
$numero = array();

for ($i = 0 ; $i < 20; $i++){
    $numero[] = rand(1,100);
}

echo "Numeros generados aleatoriamente" . implode(".", $numero);
$suma = array_sum($numero);
$promedio = $suma / count($numero);

echo "el promedio de los numero en el array son ", $promedio;


?>
