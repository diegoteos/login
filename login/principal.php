<?php
require_once "add/conexion.php";
require_once "add/encabezado.php";
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
} else {
    require_once "add/menu.php";
    require_once "add/inactividad.php";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludito lindo</title>
</head>

<body>
    <div class="container">
        <form action="principal.php" method="post">
            <input type="text" name="nombre" id="">
            <button type="submit" class="btn btn-primary">Saludarme</button>
        </form>
    </div>
</body>

</html>


<?php

if (isset($_POST['nombre']) && $_POST['nombre'] != null) {
    $nombre = $_POST['nombre'];
    echo "<div class='container'>Hola nos da gusto saludarte, tu nombre es: " . $nombre . '<div>';
    //$fh = fopen("prueba.txt", 'w') or die("Se produjo un error al crear el archivo");
}
