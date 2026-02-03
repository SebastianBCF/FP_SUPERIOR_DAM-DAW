<?php
session_start();
// Guardar y mostrar la última conexión del usuario
// Verificar si la variable de sesión 'ultima_conexion' existe
if (!isset($_SESSION['ultima_conexion'])) {
    // Si no existe la variable de sesión, es la primera visita
    $_SESSION['ultima_conexion'] = date("Y-m-d H:i:s");
    // Mostrar mensaje de bienvenida
    echo "<p>Esta es tu primera visita. Bienvenido!</p>";
} else {// Si ya existe, mostrar la última conexión
    echo "<p>Tu última conexión fue el: " . $_SESSION['ultima_conexion'] . "</p>";
    // Actualizar la variable de sesión con la hora actual
    $_SESSION['ultima_conexion'] = date("Y-m-d H:i:s"); 
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Última conexión del usuario</title>
    </head>
    <body>
        <!-- muestra la fecha y hora de la sesion actual del usuario -->
        <p>Tu sesion actual es <?php echo $_SESSION['ultima_conexion']?> </p>
    </body>