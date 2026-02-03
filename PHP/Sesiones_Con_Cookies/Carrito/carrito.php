<?php
session_start();

if (isset($_GET['Eliminar'])) {
    $id = (int)$_GET['Eliminar'];
    if (isset($_SESSION['carrito'][$id])) {
        unset($_SESSION['carrito'][$id]);
    }
}

if (isset($_GET['vaciar'])) {
    unset($_SESSION['carrito']); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de compras</title>
</head>
<body>
    <h1>Carrito de compras</h1>

    <?php
    $total = 0;

    if (empty($_SESSION['carrito'])):
    ?>
        <p>El carrito está vacío.</p>
        <a href="productos.php">Seguir comprando</a>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['carrito'] as $id => $producto):
                $subtotal = $producto['precio'] * $producto['cantidad'];
                $total += $subtotal;
            ?>
                <li>
                    <?php echo htmlspecialchars($producto['nombre']); ?> -
                    Cantidad: <?php echo (int)$producto['cantidad']; ?> -
                    Precio: $<?php echo number_format($producto['precio'], 2); ?> -
                    Subtotal: $<?php echo number_format($subtotal, 2); ?>
                    <a href="carrito.php?Eliminar=<?php echo $id; ?>">Eliminar</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Total: $<?php echo number_format($total, 2); ?></h2>

        <a href="productos.php">Seguir comprando</a> |
        <a href="carrito.php?vaciar=true">Vaciar carrito</a>
    <?php endif; ?>
</body>
</html>
