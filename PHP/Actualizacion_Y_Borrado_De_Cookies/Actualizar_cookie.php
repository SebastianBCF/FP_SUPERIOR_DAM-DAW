<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Cookies Básica</title>
</head>
<body>
    
    <form action="actualizar_cookie.php" method="POST">
    <label>Nuevo nombre de usuario:</label>
    <input type="text" name="valor" required>
    <button type="submit">Actualizar cookie</button>
</form>
    <h1>Actualizar Cookie</h1>
    <?php
    // con metodo post actualizamos la cookie
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'] ?? "";
        // Actualizamos la cookie con una nueva duración de 1 hora
        setcookie('usuario', $valor, time() + 604800, "/");
        echo "<p>cookue actualizada correctamente.</p>".htmlspecialchars('usuario').": ".htmlspecialchars($valor);
}       
