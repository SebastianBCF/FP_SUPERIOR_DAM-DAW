<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Cookie</title>
</head>
<body>
    <h1>Borrar Cookie</h1>

    <form method="POST">
        <button type="submit" name="borrar">Borrar Cookie usuario</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["borrar"])) {
        setcookie("usuario", "", time() - 604800, "/");
        echo "<p>Cookie borrada correctamente.</p>";
    }
    ?>
</body>
</html>