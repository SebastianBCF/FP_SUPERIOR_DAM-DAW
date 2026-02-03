<?php
if ($_POST['idioma'] ?? '') {
    setcookie("lang", $_POST['idioma'], time() + 31536000, "/");
}
if ($_GET['reset'] ?? '') {
    setcookie("lang", "", time() - 31536000, "/");
}
$lang = $_COOKIE['lang'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $lang == 'in' ? 'Welcome' : 'Bienvenido'; ?></title>
</head>
<body>
<?php if (!$lang): ?>
    <form method="POST">
        <button name="idioma" value="es">Español</button>
        <button name="idioma" value="in">Ingles</button>
    </form>
<?php else: ?>
    <?php if ($lang == 'in'): ?>
        <h1>Welcome to my page</h1>
        <p>Hello user </p>
        <p>investigate for your problems? </p>
    <?php else: ?>
        <h1>Bienvenido a mi pagina web</h1>
        <p>Hola como estas?</p>
        <p>investigando un poco tus problemas?</p>
    <?php endif; ?>
    <a href="?reset=1">Reset idioma</a>
<?php endif; ?>
</body>
</html>