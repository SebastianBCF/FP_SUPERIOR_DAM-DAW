<?php
$usuarios = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $Correo = $_POST['Correo'];
    $contraseña = $_POST['contraseña'];

    if (!empty($usuario) && !empty($Correo) && !empty($contraseña)) {
        // Encriptar la contraseña
        $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

        // Guardar el usuario y la contraseña encriptada
        $usuarios[] = [
            'usuario' => $usuario,
            'Correo' => $Correo,
            'contraseña' => $contraseña_encriptada
        ];

        echo "Usuario registrado exitosamente.";
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario con Contraseña Encriptada</title>
</head>
<body>
    <!-- Formulario de registro -->
    <form method="POST" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="Correo">Correo:</label>
        <input type="email" id="Correo" name="Correo" required><br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        <input type="submit" value="Registrar">
</html>