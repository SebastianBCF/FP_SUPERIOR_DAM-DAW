<?php

/**
 * Archivo principal de la aplicación.
 * Permite obtener datos curiosos de gatos y navegar por la aplicación.
 */

/**
 * Obtiene un dato curioso de gatos desde la API catfact.ninja.
 *
 * @return string Retorna un dato curioso sobre gatos.
 */
function obtenerDatoGato()
{
    $url = "https://catfact.ninja/fact";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    return $data['fact'];
}

// Si se presiona el botón, obtenemos un nuevo dato
$fact = obtenerDatoGato();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Prueba de Aplicación</title>
</head>

<body>
    <h1>Menú de Prueba de la Aplicación</h1>
    <ul>
        <li><a href="#gatofact">Dato Curioso de Gatos</a></li>
        <!-- Aquí podrías agregar otros apartados de tu tarea -->
    </ul>

    <hr>

    <h2 id="gatofact">Dato Curioso de Gatos 🐱</h2>
    <p><?php echo $fact; ?></p>
    <form method="get">
        <button type="submit">Obtener otro dato</button>
    </form>
</body>

</html>
