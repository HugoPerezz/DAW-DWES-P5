<?php

if ( isset( $_COOKIE[ 'visitas' ] ) ) {

    setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600 * 24 );
    $mensajito = 'Numero de visitas a la web: '.$_COOKIE[ 'visitas' ];
}
else {

    setcookie( 'visitas', 1, time() + 3600 * 24 );
    $mensajito = 'Bienvenido por primera vez a nuesta web';
}
?>
<html>
<head>
    <title>Cookie</title>
</head>
<body>
<p>
    <?php echo $mensajito;?>
</p>
</body>
</html>