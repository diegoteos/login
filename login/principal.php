<?php
require_once "add/conexion.php";
require_once "add/encabezado.php";
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
} else {
    require_once "add/menu.php";
    require_once "inactividad.php";
} 
