<?php

if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo'] = time();
} else if (time() - $_SESSION['tiempo'] > 500) {
    session_destroy();
?>
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=login.php">
<?php
    die();
}
$_SESSION['tiempo'] = time();



?>