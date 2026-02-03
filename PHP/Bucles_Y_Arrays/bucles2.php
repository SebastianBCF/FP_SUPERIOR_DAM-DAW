<?php 
echo"pon el numero que quieres que le hagamos la tabla de multiplicar";
$numero = trim(fgets(STDIN));

for ($i = 1; $i <10 ; $i ++){
    $resultado = $numero * $i;
    echo "$numero X $i = $resultado";
}
?>