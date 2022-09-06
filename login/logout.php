<?php
session_start();


if (isset($_SESSION['id'])) {
   session_destroy();
   header('Location: login.php');
   /*
   echo '<script language="javascript">
    alert("..:: SESIÓN CERRADA CORRECTAMENTE ::..");
    window.location.href = "login.php";
    </script>';
    */
} else {
   //echo "Hey muchachito... que haces aca? andas  escarbando...";
   echo '<script language="javascript">
    alert("Hey muchachito... que haces aca? andas  escarbando...");
    window.location.href = "login.php";
    </script>';
   ?>

    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=login.php">
    <?php 
}
