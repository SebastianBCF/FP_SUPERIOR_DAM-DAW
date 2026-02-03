<?php
session_start();
// Contador de visitas utilizando sesiones
if (!isset($_SESSION['visitas'])) {
    // Si no existe la variable de sesión, es la primera visita
    $_SESSION['visitas'] = 1;
}
else {
    // Si ya existe, incrementar el contador
    $_SESSION['visitas']++;
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contador de visitas</title>
    </head>
    <body>
        <!-- muestra el numero de visitas hechas por el usuario -->
        <p>Esta pagina ha tenido <?php echo $_SESSION['visitas']?> visitas</p>
</html>
<!-- muestra el numero de visitas hechas por el usuario -->
<p>Esta pagina ha tenido <?php echo $_SESSION['visitas']; ?> visitas</p>