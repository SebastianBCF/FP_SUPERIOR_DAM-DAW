<?php
require_once "db.php";

/**
 * Obtiene la lista de todos los autores.
 * @return array Lista de autores.
 */
function get_listado_autores()
{
    $db = new BaseDatos();
    $sql = "SELECT id, nombre, apellidos FROM Autor";
    $stmt = $db->obtenerConexion()->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Obtiene datos de un autor y sus libros asociados.
 * @param int $id ID del autor.
 * @return array Datos del autor y sus libros.
 */
function get_datos_autor($id)
{
    $db = new BaseDatos();
    $sqlAutor = "SELECT * FROM Autor WHERE id = :id";
    $stmt = $db->obtenerConexion()->prepare($sqlAutor);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $autor = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($autor) {
        $sqlLibros = "SELECT id, titulo FROM Libro WHERE id_autor = :id";
        $stmtLibros = $db->obtenerConexion()->prepare($sqlLibros);
        $stmtLibros->bindParam(':id', $id);
        $stmtLibros->execute();
        $autor['libros'] = $stmtLibros->fetchAll(PDO::FETCH_ASSOC);
    }
    return $autor;
}

/**
 * Obtiene el listado de todos los libros.
 * @return array ID y título de los libros.
 */
function get_listado_libros()
{
    $db = new BaseDatos();
    $sql = "SELECT id, titulo FROM Libro";
    $stmt = $db->obtenerConexion()->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Obtiene info detallada de un libro e información de su autor.
 * @param int $id ID del libro.
 * @return array Detalles del libro y autor.
 */
function get_datos_libro($id)
{
    $db = new BaseDatos();
    $sql = "SELECT l.titulo, l.f_publicacion, l.id_autor, a.nombre, a.apellidos
            FROM Libro l
            JOIN Autor a ON l.id_autor = a.id
            WHERE l.id = :id";
    $stmt = $db->obtenerConexion()->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// LÓGICA DE PETICIONES (Nombres corregidos a snake_case)
$posibles_url = ["get_listado_autores", "get_datos_autor", "get_listado_libros", "get_datos_libro"];
$valor = "Error";

if (isset($_GET["action"]) && in_array($_GET["action"], $posibles_url)) {
    switch ($_GET["action"]) {
        case "get_listado_autores":
            $valor = get_listado_autores();
            break;
        case "get_datos_autor":
            if (isset($_GET["id"])) $valor = get_datos_autor($_GET["id"]);
            break;
        case "get_listado_libros":
            $valor = get_listado_libros();
            break;
        case "get_datos_libro":
            if (isset($_GET["id"])) $valor = get_datos_libro($_GET["id"]);
            break;
    }
}

header('Content-Type: application/json');
exit(json_encode($valor));
