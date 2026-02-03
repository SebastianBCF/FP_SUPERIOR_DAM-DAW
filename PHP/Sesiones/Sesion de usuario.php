<?php
session_start();
// Guardar el nombre del usuario en la sesión
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Asignar el nombre enviado por el formulario a la variable de sesión
    $_SESSION['nombre'] = $_POST['nombre'];
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sesión de usuario</title>
    </head>
    <body>
        <h1>Nombre del usuario</h1>
        <?php
        // Mostrar el nombre del usuario si está almacenado en la sesión
        if (isset($_SESSION['nombre'])){
            echo "<p>hola {$_SESSION['nombre']} bienvenido de nuevo</p>";
        }
        ?>
        <!-- formulario para ingresar el nombre -->
        <form method="post" action="">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <input type="submit" value="Enviar">
        </form>
    </body>
