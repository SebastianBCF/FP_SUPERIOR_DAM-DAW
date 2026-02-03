<?php
session_start();
if (!isset($_SESSION["usuario"]) || $_SESSION["rol"] !== "administrador") {
    header("Location: Roles.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrador</title>
</head>
<body>
<h1>Bienvenido Administrador: <?php echo $_SESSION["usuario"]; ?></h1>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>
