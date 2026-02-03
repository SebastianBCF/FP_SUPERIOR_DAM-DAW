<?php
$productos = array(
    "manzana" => 3.00, 
    "pizza" => 4.00, 
    "leche" => 1.50,
    "nocilla" => 5.00, 
    "cabezada" => 7.00,
);

$producto_mas_caro = "";
$precio_alto = 0; 

foreach ($productos as $producto => $precio){
    if ($precio > $precio_alto){
        $precio_alto = $precio;
        $producto_mas_caro = $producto;
    }
}
echo " el producto mas caro del array es $producto_mas_caro, $precio_alto";
?>