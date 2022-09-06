<?php
require_once "add/conexion.php";
require_once "add/encabezado.php";
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
} else {
$tipo_usuario = $_SESSION['tipo_usuario'];

if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 10) {
    session_destroy();
    ?>
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=login.php">
    <?php 
    die();  
}
$_SESSION['tiempo']=time();




    ?>
    
<body>


<div class="container">
    <hr class="my-2">
    <nav class=" navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


            </div>
        </div>
    </nav>
    <nav class=" navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="navbar-brand" href="principal2.php">Inicio</a>
                    </li>
                    <?php if ($tipo_usuario == '1') { ?>
                        <li class="nav-item">
                            <a class="navbar-brand" href="secundario.php">Segundo</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="navbar-brand" href="logout.php">Salir</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <hr class="my-2">
</div>
    <?php

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
}
