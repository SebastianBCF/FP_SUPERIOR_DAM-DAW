<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: home.php');
    exit();
}
if(isset($_COOKIE["usuario"])){
    $_SESSION["usuario"] = $_COOKIE["usuario"];
    $_SESSION["rol"] = $_COOKIE["rol"] ?? "user";
    header("Location: home.php");
    exit();
}
if(isset($_SESSION['usuario'])){
    header("Location:pagina_protegida.php");
    exit();
}

if (!isset($_SESSION['visitas'])){
    $_SESSION['visitas'] = 1;
} else {
    $_SESSION['visitas']++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Inicio de Sesión</h2>

    <form action="validar.php" method="POST">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>
        
         <label>
            <input type="checkbox" name="recordar"> Recordarme
        </label><br><br>

        <button type="submit">Ingresar</button>
        <p>Esta pagina ha tenido <?php echo $_SESSION['visitas']?> visitas</p>
    </form>
</body>
</html>