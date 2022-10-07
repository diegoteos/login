<?php


// validamos que vengan los dos parametros el del usuario y la contraseña
if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];

    $correo = 'santalucia@gmail.com';
    $contra = '1234567';

    if ($usuario == $correo && $password == $contra) {
        header('location: bienvenido.php');
    } else {
        echo "El usuario o la contraseña no coinciden";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<title>Login</title>
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="container">

                <br>
                <br>
                <form action="login.php" method="post">
                    Ingrese su correo:
                    <br>
                    <input type="text" name="usuario" id="">
                    <br>
                    <br>
                    Ingrese la contraseña:
                    <br>
                    <input type="password" name="contraseña" id="">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>