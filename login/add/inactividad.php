<?php
if (!isset($_SESSION['id'])) {
    header('Location: ../logout.php');
}
if (!isset($_SESSION['tiempo'])) {  // validamos si existe la session tiempo y si no existe la creamos
    $_SESSION['tiempo'] = time();   // creamos la sesion de tiempo asignandole el valor de la funcion time()
} else if (time() - $_SESSION['tiempo'] > 20) {    // si la session tiempo existe entonces vemos si es mayor de 3 minutos y si es asi la destruimos
    session_destroy();
    header("location: login.php");
    die();
}
$_SESSION['tiempo'] = time(); // Reseteamos la session de tiempo cada vez que interactuamos con el archivo
