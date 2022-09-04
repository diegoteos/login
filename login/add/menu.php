<?php


$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];
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
                            <a class="navbar-brand" href="principal.php">Inicio</a>
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