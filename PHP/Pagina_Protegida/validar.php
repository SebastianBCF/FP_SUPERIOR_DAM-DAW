<?php
session_start();
$usuarios = [
    'admin' => ['1234', 'admin'],
    'natalia' => ['abcd', 'user'],
    'sebastian'  => ['pass', 'user']
];
if (!isset($_POST['usuario']) || !isset($_POST['password'])) {
    header('Location: login.php');
    exit();
}
$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);
$recordar = isset($_POST['recordar']);

if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario][0] === $password) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = $usuarios[$usuario][1];

    if (array_key_exists($usuario,$usuarios) && $usarios[$usuario] === $password){
    $_SESSION['usuario'] = $usuario;
    header("Location: pagina_protegida.php");
    exit();
    }else{
        echo "usario o contraseña incorrecto <a href='login.php'>voler</a>";
    }

    
    if ($recordar) {
        setcookie('usuario', $usuario, time() + (7 * 24 * 60 * 60), "/");
        setcookie('rol', $usuarios[$usuario][1], time() + (7 * 24 * 60 * 60), "/");
    }

    header('Location: home.php');
    exit();
} else {
    echo "Usuario o contraseña incorrectos. <a href='login.php'>Volver</a>";
    exit();
}
