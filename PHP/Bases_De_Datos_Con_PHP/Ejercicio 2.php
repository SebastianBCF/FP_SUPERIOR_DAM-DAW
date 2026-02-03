<?php
$mysqli = new mysqli("localhost", "root", "", "daw");
$result = $mysqli->query("SELECT id, nombre, email FROM users");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Lista de Usuarios</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        font-family: Arial, sans-serif;
    }

    th {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .empty {
        text-align: center;
        padding: 20px;
        color: #666;
        font-style: italic;
    }
</style>

<body>
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
            <?php while ($u = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $u['id']; ?></td>
                    <td><?php echo $u['nombre']; ?></td>
                    <td><?php echo $u['email']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p style="text-align:center;color:#666;">No hay usuarios registrados</p>
    <?php endif; ?>
</body>

</html>
<?php $mysqli->close(); ?>
