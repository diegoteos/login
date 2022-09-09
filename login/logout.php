<?php
session_start();


if (isset($_SESSION['id'])) {
   session_destroy();
   header('Location: login.php');
  
} else {
   //echo "Hey muchachito... que haces aca? andas  escarbando...";
   echo '<script language="javascript">
    alert("Hey muchachito... que haces aca? andas  escarbando...");
    window.location.href = "login.php";
    </script>';
}
