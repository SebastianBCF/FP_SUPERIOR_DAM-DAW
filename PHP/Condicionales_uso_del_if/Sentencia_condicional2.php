<?php 

echo "ingrese su edad";
$edad = (int) trim(fgets(STDIN));

if($edad >= 18){
    echo"usted puede votar";
}else{
    echo"usted no puede votar por que usted es menor de edad";
}