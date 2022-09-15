<?php
require_once "add/conexion.php";
require_once "add/encabezado.php";
session_start();
$tipo_usuario = $_SESSION['tipo_usuario'];

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
} else {
    require_once "add/menu.php";
    require_once "add/inactividad.php";
    if ($tipo_usuario != '1') {  // SI NO ES USUARIO TIPO 1 ADMIN ENTONCES REDIRECCIONAMOS AL INICIO
        header('Location: principal.php');
    } else {

?>

        <title>Mapa</title>

        <body>
            <div class="container">
                <h3>Bienvenido a su app mapa:</h3>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=660&amp;height=638&amp;hl=en&amp;q=guatemala&amp;t=k&amp;z=7&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpenation.com/">https://mcpenation.com</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 797px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 797px;
                        }

                        .gmap_iframe {
                            height: 797px !important;
                        }
                    </style>
                </div>

            </div>
        </body>

        </html>
<?php
    }
}

?>