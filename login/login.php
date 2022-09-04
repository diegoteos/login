<?php
require_once "add/conexion.php";
session_start();

if (isset($_SESSION['id'])) {
    header('Location: principal.php');
}

if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];


    $sql = "SELECT `id`, `password`, `nombre`, `tipo_usuario` FROM usuarios WHERE usuario = '$usuario'";

    $resultado = $mysqli->query($sql);

    $num = $resultado->num_rows;
    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['password'];
        $pass_c = sha1($password);

        if ($password_bd == $pass_c) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

            header("location: principal.php");
        } else {
            echo "La contraseña no coincide";
        }
    } else {
        echo "No existe el usuario";
    }
}

include_once "add/encabezado.php";
?>


<title>Inicio de sesión</title>
</head>

<body>
    <div class="container">
        <div class="container">

            <form action="login.php" method="post">
                <input type="text" name="usuario" id="">
                <input type="password" name="contraseña" id="">
                <button type="submit" class="btn btn-success">Ingresar</button>
            </form>
        </div>
    </div>
</body>

</html>