<?php

echo "Introduce la nota del alumno";
$nota = trim(fgets(STDIN));
$nota = (float) $nota;

if ($nota <0 && $nota >10){
    echo "son numero del 0 al diez introduzca el numero correctamente";
}elseif($nota <5){
    echo "usted ha reprobado estudie mas para la proxima xd";
}elseif($nota <7){
    echo"usted ha aprobado felicitaciones pero no te copies sebastian JSADHKAJS";
}elseif($nota <9){
    echo "usted ha sacado un Notable felicitaciones";
}else{
    echo "felicitaciones eres sobresaliente";
}
?>