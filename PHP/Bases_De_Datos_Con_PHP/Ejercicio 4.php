<?php

$mysqli = new mysqli("localhost", "root", "", "daw");

$mensaje = '';
if ($_POST) {
    $id = $_POST['id'] ?? '';
}

if (!empty($id)) {
    // Use prepared statements for all SQL queries
    $stmt = $mysqli->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    $stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $check = $stmt->get_result();

    if ($check && $check->num_rows > 0) {
        // This UPDATE is likely unnecessary, but keeping for logic parity
        $stmt_update = $mysqli->prepare("UPDATE users SET id = ? WHERE id = ?");
        $stmt_update->bind_param("ii", $id, $id);
        $stmt_update->execute();
        $stmt_update->close();
        $mensaje = "usuario eliminado con exito $id";
    } else {
        $mensaje = "Usuario no encontrado";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Borrar usuario</title>
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
    <h2>Borrar usuario</h2>

    <?php if ($mensaje): ?>
        <?php echo strpos($mensaje, 'actualizado') ?>">
        <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <input type="number" name="id" placeholder="ID del usuario" required>
        <button type="submit">Borrar</button>
    </form>
</body>

</html>
<?php $mysqli->close(); ?>
