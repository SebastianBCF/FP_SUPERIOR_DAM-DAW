<?php
session_start(); 

// Inicializamos el array de usuarios si no existe aún
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

// Procesar registro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario']) && isset($_POST['contraseña']) && isset($_POST['rol'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $Rol = $_POST['rol'];

    if (!empty($usuario) && !empty($contraseña)) {
        // Verificar si el usuario ya existe
        $existe = false;
        foreach ($_SESSION['usuarios'] as $user) {
            if ($user['usuario'] === $usuario) {
                $existe = true;
                break;
            }
        }

        if ($existe) {
            echo "<p>El usuario ya está registrado.</p>";
        } else {
            // Encriptar la contraseña y guardar el usuario
            $_SESSION['usuarios'][] = [
                'usuario' => $usuario,
                'contraseña' => password_hash($contraseña, PASSWORD_DEFAULT),
                'Rol' => $Rol
            ];
            echo "<p>Usuario registrado exitosamente.</p>";
        }
    } else {
        echo "<p>Por favor, complete todos los campos.</p>";
    }
}

    // Procesar inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario1']) && isset($_POST['contraseña1']) && isset($_POST['roll'])) {
    $usuario = $_POST['usuario1'];
    $contraseña = $_POST['contraseña1'];
    $rol = $_POST['rol1'];
    // Verificar credenciales
    if (!empty($usuario) && !empty($contraseña)) {
        $encontrado = false;
        // buscar usuario y verificar contraseña
        foreach ($_SESSION['usuarios'] as $user) {
            if ($user['usuario'] === $usuario && password_verify($contraseña, $user['contraseña'])) {
                $encontrado = true;
                $rol = $user['Rol'];
                break;
            }
        }
        if ($encontrado) {
            $_SESSION['usuario_logueado'] = $usuario;
            $_SESSION['rol'] = $rol;
            switch ($rol) {
                case 'admin':
                    header("Location: admin.php");
                    exit;
                case 'editor':
                    header("Location: editor.php");
                    exit;
                default:
                    header("Location: usuario.php");
                    exit;
            }

            if ($rol === 'admin') {
                echo "<h3>Menú de administrador</h3>
                      <ul>
                        <li>SOLO ADMIN</li>
                        <li>SOLO ADMIN</li>
                        <li>SOLO ADMIN</li>
                      </ul>";
            } elseif ($rol === 'editor') {
                echo "<h3>Menú de editor</h3>
                      <ul>
                        <li>SOLO EDITOR</li>
                        <li>SOLO EDITOR</li>
                      </ul>";
            } else {
                echo "<h3>Menú de usuario</h3>
                      <ul>
                        <li>SOLO USUARIO</li>
                        <li>SOLO USUARIO</li>
                      </ul>";
            }
            echo "<h2>sesion correctamente hola $usuario</h2>";
        } else {
            echo "<p>usuario o algo incorrecto.</p>";
        }
    } else {
        echo "<p>Completa los campos</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro e Inicio de Sesión con Session</title>
</head>
<body>
    <h1>Registro de usuario</h1>
    <form method="POST" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        <input type="submit" value="Registrar">
         <label for="rol">Rol:</label>
        <select id="rol" name="rol" required>
            <option value="usuario">Usuario</option>
            <option value="editor">Editor</option>
            <option value="admin">Administrador</option>
        </select><br><br>
    </form>
    <h1>Inicio de sesión</h1>
    <form method="POST" action="">
    <form method="POST" action="">
        <label for="usuario_login">Usuario:</label>
        <input type="text" id="usuario_login" name="usuario1" required><br><br>
        <label for="contraseña_login">Contraseña:</label>
        <input type="password" id="contraseña_login" name="contraseña1" required><br><br>
        <label for="rol_login">Rol:</label>
        <select id="rol_login" name="rol1" required>
            <option value="usuario">Usuario</option>
            <option value="editor">Editor</option>
            <option value="admin">Administrador</option>
        </select><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
