<?php 
$saludo = "";
if ($_POST) {
    $saludo = $POST["saludo"];
    
}
include "cabecera.php";
?>
<form method="post" action="">    
    <div>
        <label for="mensaje">Introduce tu nombre para un saludo personalizado</label>
        <input type="text" id="mensaje" name="saludo"/>
        </div>
    <br>
    <button type="sumbit">personaliza el saludo</button>
</form> 
<h1><?php echo "bienvenid a mi pagina ".$saludo; ?></h1>
</html>