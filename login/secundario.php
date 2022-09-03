<?php
require_once "conexion.php";
require_once "encabezado.php";
require_once "menu.php";


if (!isset($_SESSION['id'])) {
    header('Location: login.php');
 }
?>
