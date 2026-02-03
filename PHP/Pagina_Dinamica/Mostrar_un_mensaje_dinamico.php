<?php
$saludo = "";
if ($_POST) {
    $saludo = $_POST["saludo"];
}
include ( "ej1Cabecera.php");
?>
<form method="post" action="">
    <div>
        <label for="mensaje">introduce tu nombre para un saludo personalizado</label>
        <input type="text" id="mensaje" name="saludo"/>
    </div>
    <button type="submit">personalizar saludo</button>
</form>
<h1><?php echo "Bienvenido a mi pagina " . $saludo; ?></h1>
</html>