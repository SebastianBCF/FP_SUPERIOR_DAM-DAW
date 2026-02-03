<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $usuarioCorrecto = "foc";
    $passwordCorrecta = "Fdwes!22";

    if ($usuario === $usuarioCorrecto && $password === $passwordCorrecta) {
        $_SESSION["usuario"] = $usuario;
        header("Location: sesion.php");
        exit();

    } else {
        $error = "algo va mal";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Inicio de sesión</h2>

<form method="POST" action="">
    Usuario: <input type="text" name="usuario" required><br><br>
    Contraseña: <input type="password" name="password" required><br><br>
    <input type="submit" value="Ingresar">
</form>
</body>
</html>
