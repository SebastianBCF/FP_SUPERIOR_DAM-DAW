<?php
session_start();

$visitas_cookie = "visitas_usuario";
$duracion = time() + (30 * 24 * 60 * 60);


if (isset($_COOKIE[$visitas_cookie])) {
    $visitas = (int)$_COOKIE[$visitas_cookie] + 1;  // Incrementar si existe
} else {
    $visitas = 1;  // Inicializar en 1 si no existe
}

// Establecer la cookie con el nuevo valor
setcookie($visitas_cookie, $visitas, $duracion, "/");

// Resto del código de sesión...
if (!isset($_SESSION['usuario']) && isset($_COOKIE['usuario'])) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
    $_SESSION['rol'] = $_COOKIE['rol'] ?? "user";
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

$nombre = htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8');
$rol = $_SESSION['rol'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>

<body>
    <h1>Hola, <?php echo $nombre; ?> </h1>
    <p>Tu rol actual es: <strong><?php echo $rol; ?></strong></p>

    <hr>

    <?php if ($rol === 'admin'): ?>
        <h2>Zona de administradores</h2>
        <p>Solo los administradores pueden ver esto.</p>
        <a href="admin.php">Ir a panel de administración</a>
    <?php else: ?>
        <p>Bienvenido al sitio. No tienes privilegios de administrador.</p>
    <?php endif; ?>

    <hr>
    <a href="logout.php">Cerrar sesión</a>
    <p>Hola, has visitado esta página <strong><?php echo $visitas; ?></strong> veces.</p>
</body>

</html>
