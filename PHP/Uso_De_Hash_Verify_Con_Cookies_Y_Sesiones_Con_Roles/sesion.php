<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sesión iniciada</title>
</head>
<body>

<h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?> </h1>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>
