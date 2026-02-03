<?php
class BaseDatos
{
    private $conexion;

    public function __construct()
    {
        $host = "localhost";
        $db   = "Libros";
        $user = "root"; // Cambia según tu config
        $pass = "";     // Cambia según tu config

        try {
            $this->conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function obtenerConexion()
    {
        return $this->conexion;
    }
}
?>