<?php 
session_start();

$productos = [
    1 => ["nombre" => "Patatas XXL", "precio" => 10.0],
    2 => ["nombre" => "Botella de vodka", "precio" => 15.5],
    3 => ["nombre" => "Pizza barbacoa", "precio" => 7.25]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de productos</title>
</head>
<body>
    <h1>Productos disponibles</h1>
    <ul>
        <?php foreach ($productos as $id => $producto): ?>
            <li>
                <?php echo htmlspecialchars($producto["nombre"]); ?> -
                $<?php echo number_format($producto["precio"], 2); ?>

                <form action="agreagar.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit">Añadir al carrito</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="carrito.php">Ver carrito</a>
</body>
</html>
