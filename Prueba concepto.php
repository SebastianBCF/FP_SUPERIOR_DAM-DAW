<?php
/*Realiza un script en PHP usando PDO que:
1. Se conecte a una base de datos MySQL llamada tienda
2. Usuario: root – Sin contraseña
3. Obtenga todos los registros de la tabla productos
o Campos: id, nombre, precio
4. Muestre por pantalla el nombre y el precio de cada producto*/

$user = 'root';
$password = '';
$host = 'localhost';
$dbname = 'tienda';

$conexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$consulta = $conexion->query("SELECT nombre, precio FROM productos");
while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nombre: " . $fila['nombre'] . " - Precio: " . $fila['precio'] . "<br>";
}

$mysqli = new mysqli("localhost", "root", "", "usuarios_db");

$result = $mysqli->query("SELECT nombre, precio FROM productos");
echo "<h2>Lista de Productos</h2>";
while ($row = $result->fetch_assoc()) {
    echo "Nombre: " . htmlspecialchars($row['nombre']) . " - Precio: " . htmlspecialchars($row['precio']) . "<br>";
}
