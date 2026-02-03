<?php
session_start();
session_unset();
session_destroy();
if (isset($_COOKIE['usuario'])){
    setcookie("usuario", '', time() - 3600, "/");
    }
if (isset($_COOKIE['rol'])){
    setcookie('rol', '', time() - 3600, "/");
}
header("Location: login.php?mensaje=Sesión cerrada correctamente");
exit();
