<?php
$hora = Date("H");

if ($hora >= 6 && $hora < 12){
    echo "Buenos dias";
}elseif($hora >= 12 && $hora < 18){
    echo "Buenas Tardes";
}else{
    echo "Buenas Noches";
}
?>