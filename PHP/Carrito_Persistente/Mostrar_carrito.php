<?php
$carrito = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
$total = 0;
 
foreach ($carrito as $item) {
    $total += $item['price'];
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Carrito</title>
</head>
<body>
    <?php if (empty($carrito)): ?>
        <p>Carrito vacio</p>
    <?php else: ?>
        <?php foreach ($carrito as $item): ?>
            <div>
                <span><?= $item['name'] ?> - $<?= $item['price'] ?></span>
                <a href="cart.php?remove=<?= $item['id'] ?>">Quitar</a>
            </div>
        <?php endforeach; ?>
        <h3>Total: $<?= number_format($total, 2) ?></h3>
    <?php endif; ?>
    <a href="cart.php">Volver</a>
</body>
</html>