<?php
$titulo = "Titulo";
if($_POST){
    $titulo = $_POST["nuevotitulo"];
}
include "cabecera.php";
include "navegacion.php";
   ?>
        <h2> cambiar titulo de pagina </h2>
        <from method ="post" action ="">
        <div>
            <label for="nuevotitulo"> nuevo Titulo</label>
            <input type="text" id ="nuevotitulo" name="titulo"/>
        </div>
        <br>
        <button type="submit"> Cambiar Titulo</button>
        </from>
     
    <?php

include "footer.php";
?>