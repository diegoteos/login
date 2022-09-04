<?php
/*

if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 10)) {
    session_unset();
    session_destroy();
    echo "Sesion finalizada";
?>
    <META HTTP-EQUIV="REFRESH" CONTENT="12;URL=login.php">
<?php
}
$_SESSION['start'] = time();
*/


//session_start();
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 5) {
    session_destroy();
    /* Aquí redireccionas a la url especifica */
    //header("Location: login.php");
    ?>
    <META HTTP-EQUIV="REFRESH" CONTENT="URL=login.php">
    <?php 
    die();  
}
$_SESSION['tiempo']=time();



?>