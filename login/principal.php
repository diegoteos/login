<?php
require_once "add/conexion.php";
require_once "add/encabezado.php";
require_once "add/menu.php";

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
 }
