<?php
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
$suma_diagonal = 0;
for ($i = 0; $i < 3; $i++) {
    $suma_diagonal += $matriz[$i][$i];
}

echo "Matriz 3x3:";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "";
}

echo "La suma de la diagonal principal es: $suma_diagonal";
?>
