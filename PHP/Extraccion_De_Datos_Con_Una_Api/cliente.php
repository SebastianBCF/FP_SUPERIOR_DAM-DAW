<!DOCTYPE html>
<html>

<head>
    <title>Librería API</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .menu {
            margin-bottom: 20px;
            padding: 10px;
            background: #f4f4f4;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>

<body>

    <div class="menu">
        <a href="cliente.php?action=get_listado_autores">Listado Autores</a> |
        <a href="cliente.php?action=get_listado_libros">Listado Libros</a>
    </div>

    <?php
    if (isset($_GET["action"])) {
        // URL base de la API (ajusta según tu carpeta)
        $url_api = "http://localhost/dwes/rest/api.php?action=" . $_GET["action"];
        if (isset($_GET["id"])) $url_api .= "&id=" . $_GET["id"];

        $json = file_get_contents($url_api);
        $datos = json_decode($json, true);

        switch ($_GET["action"]) {
            case "get_listado_autores":
                echo "<h2>Lista de Autores</h2><ul>";
                foreach ($datos as $autor) {
                    echo "<li><a href='cliente.php?action=get_datos_autor&id=" . $autor['id'] . "'>" . $autor['nombre'] . " " . $autor['apellidos'] . "</a></li>";
                }
                echo "</ul>";
                break;

            case "get_datos_autor":
                echo "<h2>Datos del Autor</h2>";
                echo "Nombre: " . $datos['nombre'] . " " . $datos['apellidos'] . "<br>";
                echo "Nacionalidad: " . $datos['nacionalidad'] . "<br>";
                echo "<h3>Libros escritos:</h3><ul>";
                foreach ($datos['libros'] as $libro) {
                    echo "<li><a href='cliente.php?action=get_datos_libro&id=" . $libro['id'] . "'>" . $libro['titulo'] . "</a></li>";
                }
                echo "</ul>";
                break;

            case "get_listado_libros":
                echo "<h2>Lista de Libros</h2><ul>";
                foreach ($datos as $libro) {
                    echo "<li><a href='cliente.php?action=get_datos_libro&id=" . $libro['id'] . "'>" . $libro['titulo'] . "</a></li>";
                }
                echo "</ul>";
                break;

            case "get_datos_libro":
                echo "<h2>Detalle del Libro</h2>";
                echo "Título: " . $datos['titulo'] . "<br>";
                echo "Fecha Publicación: " . $datos['f_publicacion'] . "<br>";
                echo "Autor: <a href='cliente.php?action=get_datos_autor&id=" . $datos['id_autor'] . "'>" . $datos['nombre'] . " " . $datos['apellidos'] . "</a>";
                break;
        }
    }
    ?>
</body>

</html>
