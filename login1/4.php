<?php
if (isset($_POST['numeros']) && isset($_POST['letras'])) {
    $numeros = $_POST['numeros'];
    $letras = $_POST['letras'];
    $valores = $letras . $numeros;
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
                <form action="4.php" method="post">
                    Ingrese los numeros:
                    <br>
                    <input type="number" name="numeros" id="" maxlength="3" required>
                    <br>
                    <br>
                    Ingrese las letras:
                    <br>
                    <input type="txt" name="letras" id="" maxlength="3" required>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </form>
                <br><br><br>
                <?php
                if(isset($valores)){
                    echo $valores;
                }
                ?>
            </div>
        </div>
    </div>
</body>