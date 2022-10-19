<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

$resultados = $conexion->query("CREATE TABLE hperezs8_usuarios (
    usuario varchar(255),
    correo varchar(255) PRIMARY KEY ,
    contrasena varchar(255),
    nacimiento date,
    admin BOOLEAN,
    imagen TEXT
)");


$resultados = $conexion->query('insert into hperezs8_usuarios values (usuario, correo, contrasena, nacimiento, admin, imagen)');
    values ('hugo69', 'hperezd@gmail.com', 'elbicho', 2003-07-20,TRUE, 'no');

?>
