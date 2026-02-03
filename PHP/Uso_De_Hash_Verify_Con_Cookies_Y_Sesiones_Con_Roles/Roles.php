<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $rol = $_POST["rol"];

    $usuarios = [
        "admin" => ["password" => "admin123", "rol" => "administrador"],
        "user"  => ["password" => "user123", "rol" => "usuario"],
    ];

    if (isset($usuarios[$usuario]) &&
        $usuarios[$usuario]["password"] === $password &&
        $usuarios[$usuario]["rol"] === $rol
    ) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["rol"] = $rol;

        if ($rol == "administrador") {
            header("Location: admind.php");
            exit();
        } else {
            header("Location: user.php");
            exit();
        }

    } else {
        $error = "algo esta mal";
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

<form action="" method="POST">
    Usuario: <input type="text" name="usuario" required><br><br>
    Contraseña: <input type="password" name="password" required><br><br>

    Rol:
    <select name="rol">
        <option value="administrador">Administrador</option>
        <option value="usuario">Usuario</option>
    </select>
    <br><br>

    <input type="submit" value="Ingresar">
</form>
</body>
</html>
