<?php
session_start();
if (!isset($_SESSION["usuario"]) || $_SESSION["rol"] !== "usuario") {
    header("Location: Roles.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuario</title>
</head>
<body>
<h1>Bienvenido Usuario: <?php echo $_SESSION["usuario"]; ?></h1>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>

