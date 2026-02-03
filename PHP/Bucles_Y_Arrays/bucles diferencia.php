
<?php

for ($i = 0; $i <= 10; $i++) {
    echo "el numero es " . $i;
}
?>
<?php 

$i = 0;
while ($i % 2 == 0) {
    echo "estos son los numeros pares " . $i;
    $i++;
}
?>
<?php
echo "<ul>";
$frutas = array("manzana", "banana", "naranja", "pera");
foreach ($frutas as $fruta) {
    echo "<li>la fruta es:  . $fruta </li>";
}
?>