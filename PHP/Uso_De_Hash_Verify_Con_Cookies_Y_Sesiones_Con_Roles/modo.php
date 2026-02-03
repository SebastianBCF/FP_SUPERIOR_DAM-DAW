<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modo = ($_POST['modo'] === 'oscuro') ? 'oscuro' : 'claro';

    setcookie('modo', $modo, time() + 7 * 24 * 60 * 60);
    header("Location: modo.php?aplicado=$modo");
    exit();
}


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
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        select, button {
            padding: 5px 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Modo <?= $modo_actual === 'oscuro' ? 'Oscuro' : 'Claro' ?></h1>

    <?php if (isset($_GET['aplicado'])): ?>
        <p> Modo <strong><?= htmlspecialchars($_GET['aplicado']) ?></strong> aplicado correctamente.</p>
    <?php endif; ?>

    <form method="post">
        <label for="modo">Selecciona modo:</label>
        <select name="modo" id="modo">
            <option value="claro" <?= $modo_actual === 'claro' ? 'selected' : '' ?>>Claro</option>
            <option value="oscuro" <?= $modo_actual === 'oscuro' ? 'selected' : '' ?>>Oscuro</option>
        </select>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
