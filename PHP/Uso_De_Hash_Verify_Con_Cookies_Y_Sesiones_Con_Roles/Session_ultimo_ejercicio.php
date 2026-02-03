<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
if (isset($_POST["borrar"])) {
    unset($_SESSION["telefono"]);
    unset($_SESSION["email"]);


    setcookie("horario", "", time() - 3600);

    $mensaje = "Datos borrados correctamente.";
}
if (isset($_POST["grabar"])) {

   
    if (!empty($_POST["telefono"]) && !empty($_POST["email"])) {

        $_SESSION["telefono"] = $_POST["telefono"];
        $_SESSION["email"] = $_POST["email"];

        $mensaje = "Datos guardados en sesión.";

    } else {
        $mensaje = "Debe rellenar todos los campos.";
    }
}


if (isset($_POST["grabar_horario"])) {

    $horario = $_POST["horario"];
    setcookie("horario", $horario, time() + 86400);
    $mensaje = "Horario guardado correctamente.";
}
$telefono = $_SESSION["telefono"] ?? "";
$email = $_SESSION["email"] ?? "";

$horarioCookie = $_COOKIE["horario"] ?? ""; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sesión</title>
</head>
<body>
<h2>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h2>
<form method="POST">
    <label>Teléfono:</label><br>
    <input type="text" name="telefono" value="<?php echo $telefono; ?>" required><br><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $email; ?>" required><br><br>
    <input type="submit" name="grabar" value="Grabar"><br><br>

    <hr>

    <label>Horario:</label><br>
    <select name="horario">
        <option value="Mañana" <?php if ($horarioCookie == "Mañana") echo "selected"; ?>>Mañana</option>
        <option value="Tarde" <?php if ($horarioCookie == "Tarde") echo "selected"; ?>>Tarde</option>
        <option value="Noche" <?php if ($horarioCookie == "Noche") echo "selected"; ?>>Noche</option>
    </select>
    <input type="submit" name="grabar_horario" value="Grabar horario"><br><br>
    <hr>
    <input type="submit" name="borrar" value="Borrar todo">
</form>
<br>
<a href="logout.php">Cerrar sesión</a>
</body>
</html>
