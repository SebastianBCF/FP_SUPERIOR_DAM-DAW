<?php
include 'catalog.php';
$carrito = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
 

if (isset($_GET['add'])) {
    $id = (int)$_GET['add'];
   
    foreach ($productos as $producto) {
        if ($producto['id'] == $id) {
            $carrito[] = $producto;
           
            $carrito_json = json_encode($carrito);
            if (strlen($carrito_json) < 4096) {
                setcookie('cart', $carrito_json, time() + 3600, '/');
            }
            break;
        }
    }
}
 
if (isset($_GET['remove'])) {
    $id = (int)$_GET['remove'];
    foreach ($carrito as $key => $item) {
        if ($item['id'] == $id) {
            unset($carrito[$key]);
            $carrito = array_values($carrito);
           
            $carrito_json = json_encode($carrito);
            setcookie('cart', $carrito_json, time() + 3600, '/');
            break;
        }
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Carrito</title>
</head>
<body>
    <?php
    $carrito_json = json_encode($carrito);
    if (strlen($carrito_json) >= 4096): ?>
        <p>Carrito lleno.</p>
    <?php endif; ?>
   
    <?php foreach ($productos as $producto): ?>
        <div>
            <h3><?= $producto['name'] ?> - $<?= $producto['price'] ?></h3>
            <a href="cart.php?add=<?= $producto['id'] ?>">Añadir</a>
        </div>
    <?php endforeach; ?>
   
    <a href="mostrar_carrito.php">Ver Carrito</a>
</body>
</html>