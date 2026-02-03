<?php
if (isset($_POST['modo'])) {
    $modo = ($_POST['modo'] === 'oscuro') ? 'oscuro' : 'claro';
    setcookie('modo', $modo, time() + 7 * 24 * 60 * 60);
    header("Location: Formulario para cambiar el modo oscuro.php?aplicado=$modo");
    exit();
}

// Leer la cookie o usar 'claro' por defecto
$modo_actual = $_COOKIE['modo'] ?? 'claro';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modo Oscuro / Claro</title>
    <style>
        body {
            background-color: <?= $modo_actual === 'oscuro' ? '#222' : '#fff' ?>;
            color: <?= $modo_actual === 'oscuro' ? '#fff' : '#000' ?>;
            font-family: Arial;
        }
    </style>
</head>
<body>
    <h1>Modo <?= $modo_actual === 'oscuro' ? 'Oscuro' : 'Claro' ?></h1>

    <form method="post">
        <label>Selecciona modo:</label>
        <select name="modo">
            <option value="claro" <?= $modo_actual === 'claro' ? 'selected' : '' ?>>Claro</option>
            <option value="oscuro" <?= $modo_actual === 'oscuro' ? 'selected' : '' ?>>Oscuro</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
