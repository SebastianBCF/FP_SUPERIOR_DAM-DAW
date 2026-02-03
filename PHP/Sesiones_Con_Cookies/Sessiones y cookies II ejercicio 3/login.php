<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['ultimo_acceso'] = time();

    header("Location: Temporizador de session.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>

    <?php if (isset($_GET['mensaje'])): ?>
        <p><?= htmlspecialchars($_GET['mensaje']) ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Usuario: <input type="text" name="usuario" required></label>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
