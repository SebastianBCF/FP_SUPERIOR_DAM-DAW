<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>lista de los productos</title>
</head>
<body>
    <?php 
     $productos = ["Manzanas", "Peras", "Naranjas", "Plátanos", "Uvas"];
    ?>
    <h1>lista de los prodcutos</h1>
    <ul>
        <?php
        foreach ($productos as $producto) {
            echo "<li>$producto</li>";
        }
        ?>
    </ul>
</body>
</html>
