<?php
echo "Ingrese el primer número: ";
$num1 = (int) trim(fgets(STDIN));

echo "Ingrese el segundo número: ";
$num2 = (int) trim(fgets(STDIN));

echo "Ingrese el tercer número: ";
$num3 = (int) trim(fgets(STDIN));

if ($num1 >= $num2 && $num2 >= $num3){
    echo "el numero mayor es $num1";
}elseif ($num2 >= $num1 && $num1 >= $num3){
    echo "el numero mayor es $num2";
}else{
    echo "el numero mayor es $num3";
}