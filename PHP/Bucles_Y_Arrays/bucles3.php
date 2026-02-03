<?php
echo "introduce el numero al cual le quieres aplicar el factorial";
$numero = trim(fgets(STDIN));

$factorial = 1;
$i=1;

while ($i <= $numero){
    $factorial = $factorial * $i;
    $i ++;
}
echo "el factorial de $numero es = $factorial";
?>