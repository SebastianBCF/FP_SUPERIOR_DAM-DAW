<?php 
session_start();

if(isset($_SESSION['visitas'])){
    $_SESSION['visitas']++;
}else{
    $_SESSION['visitas'] = 1;
}
echo ("<h2>contador de visitas por session</h2>");
echo ("<h2>has visitaado la pagina".$_SESSION['visitas']."</h2>" );
?>