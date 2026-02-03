<?php
$passwordOriginal = "admin123";


$hashGenerado = password_hash($passwordOriginal, PASSWORD_DEFAULT);
echo "Hash generado: " . $hashGenerado . "<br><br>";
$passwordIngresada = "admin123"; 

if (password_verify($passwordIngresada, $hashGenerado)) {
    echo "La contraseña es correcta. Usuario autenticado.";
} else {
    echo "Contraseña incorrecta.";
}

?>
