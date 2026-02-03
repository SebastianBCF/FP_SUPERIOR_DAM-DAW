<?php 
session_start();

if (!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit();
}

$usario = htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Protegida</title>
</head>
<body>
    <h1>hola bienvenidio, <?php echo $usuario; ?>!</h1>
    <p>Solo los usuarios autenticados pueden ver esta página.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html> 