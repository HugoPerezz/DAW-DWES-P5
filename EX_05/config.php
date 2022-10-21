<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

$resultados = $conexion->query("CREATE TABLE `hperezs8_users` (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  usuario varchar(25) NOT NULL,
  contraseña varchar(255) NOT NULL,
  email varchar(100) NOT NULL,
  admin BOOLEAN = FALSE,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;")





?>