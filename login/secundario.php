<?php
require_once "add/conexion.php";
require_once "add/encabezado.php";
session_start();
$tipo_usuario = $_SESSION['tipo_usuario'];

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
} else {
    require_once "add/menu.php";
    require_once "inactividad.php";
    if ($tipo_usuario == '2'){
        header('Location: principal.php');
    } else {
        echo "Felicidades, usted si es de mi tipo.";    
    }
} 

?>
