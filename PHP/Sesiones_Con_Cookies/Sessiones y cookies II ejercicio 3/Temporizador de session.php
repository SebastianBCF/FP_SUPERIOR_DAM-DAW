<?php 
session_start();

$tiempo_inactividad = 10; 

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php?mensaje=Debe iniciar sesión");
    exit();
}

// Verificar inactividad
if (isset($_SESSION["ultimo_acceso"])) {
    $inactividad = time() - $_SESSION["ultimo_acceso"];

    if ($inactividad > $tiempo_inactividad) {
        session_unset();
        session_destroy();

        header("Location: login.php?mensaje=Sesión expirada por inactividad");
        exit();
    }
}

// Actualizar último acceso
$_SESSION["ultimo_acceso"] = time();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página protegida</title>
</head>
<body>
    <h1>Bienvenido, <?= htmlspecialchars($_SESSION['usuario']) ?></h1>
    <p>Tu sesión está activa.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
