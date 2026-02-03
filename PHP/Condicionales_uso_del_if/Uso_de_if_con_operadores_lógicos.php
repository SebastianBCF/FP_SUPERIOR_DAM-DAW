<?php 
echo"Ingresa tu nombre";
$Nombre = trim(fgets(STDIN));
echo "Ingresa tu edad";
$Edad = trim(fgets(STDIN));
if($Nombre == "Juan" && $Edad > 18){
   echo "Hola que tal juan eres mayor de edad";
}else{
    echo"Hola No te llamas juan verdad? jeje ";
}
?>