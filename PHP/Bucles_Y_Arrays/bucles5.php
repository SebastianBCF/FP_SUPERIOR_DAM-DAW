<?php 
$Contraseña_correcta = "Sebastianteamo";
$Contraseña_del_usuario = "";

do {
    echo"introduzca la contraseña correcta bro";
    $Contraseña_del_usuario = trim(fgets(STDIN));

    if ($Contraseña_del_usuario !== $Contraseña_correcta){
        echo "Esa contraseña no es intenta decir mi nombre con un teamo";
    }

}while ($Contraseña_del_usuario !==$Contraseña_correcta);
    echo"yo tambien te amo <3";
?>