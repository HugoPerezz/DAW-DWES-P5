<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Nombre de Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="contraseña" required />
    </div>
    <button type="submit" name="registro" value="registro">Registro</button>
</form>
</body>
</html>

<?php
include('config.php');
session_start();
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
if (isset($_POST['register'])) {

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contraseña'];
    $contrasena_hash = password_hash($contrasena, PASSWORD_BCRYPT);

    $query = $conexion->prepare("SELECT * FROM hperezs8_users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">El email ya esta registrado!</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $conexion->prepare("INSERT INTO hperezs8_users(usuario, contraseña, email) VALUES (:usuario,:contrasena_hash,:email)");
        $query->bindParam("usuario", $username, PDO::PARAM_STR);
        $query->bindParam("contrasena_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Te has registrado!</p>';
        } else {
            echo '<p class="error">Algo ha ido mal!</p>';
        }
    }
}

?>