<?php
if ($_POST) {
    header('Location: index.php');
}

$usuari = $_POST['usuari'];
$lengua = $_POST['lengua'];

setcookie('usuari', $usuari);
setcookie('lengua', $lengua);

$mensajito = "Hola $usuari, has escogido $lengua como lengua.";

?>
<html>
<head>
    <title>Cookie</title>
</head>
<body>
<p>
    <?php echo $mensajito; ?>
</p>
</body>
</html>
