<?php
// Cambia 'your_password' por la contraseña real de tu base de datos
$mysqli = new mysqli("localhost", "root", "", "daw");

$mensaje = "";

if ($_POST) {
    $id = $_POST['id'] ?? '';
    $email = $_POST['nuevo_email'] ?? '';

    if (!empty($id) && !empty($email)) {
        // Usar prepared statements para evitar inyección SQL
        $stmt = $mysqli->prepare("SELECT id FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $check = $stmt->get_result();

        if ($check->num_rows > 0) {
            $stmt_update = $mysqli->prepare("UPDATE users SET email = ? WHERE id = ?");
            $stmt_update->bind_param("si", $email, $id);
            $stmt_update->execute();
            $mensaje = "Email actualizado para ID $id";
            $stmt_update->close();
        } else {
            $mensaje = "Usuario no encontrado";
        }
        $stmt->close();
    } else {
        $mensaje = "Completa todos los campos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar Email</title>
    <style>
        body {
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        input,
        button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <h2>Actualizar Email</h2>

    <?php if ($mensaje): ?>
        <?php echo strpos($mensaje, 'actualizado') ?>">
        <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <input type="number" name="id" placeholder="ID del usuario" required>
        <input type="email" name="nuevo_email" placeholder="Nuevo email" required>
        <button type="submit">Actualizar</button>
    </form>
</body>

</html>
<?php $mysqli->close(); ?>
