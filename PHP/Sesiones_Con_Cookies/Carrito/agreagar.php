<?php
session_start();

if (isset($_POST["id"])) {
    $id = (int)$_POST["id"];

    $productos = [
        1 => ["nombre" => "Patatas XXL", "precio" => 10.0],
        2 => ["nombre" => "Botella de vodka", "precio" => 15.5],
        3 => ["nombre" => "Pizza barbacoa", "precio" => 7.25]
    ];

    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = [];
    }

    if (isset($_SESSION["carrito"][$id])) {
        $_SESSION["carrito"][$id]["cantidad"]++;
    } else {
        $_SESSION["carrito"][$id] = [
            "nombre" => $productos[$id]["nombre"],
            "precio" => $productos[$id]["precio"],
            "cantidad" => 1
        ];
    }
}

header("Location: carrito.php");
exit();
