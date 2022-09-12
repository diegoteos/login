<?php

switch ($error) {
    case 1:
        $ip = $_SERVER['REMOTE_ADDR'];
        echo "El usuario al que se esta intentando acceder es: $usuario con la IP $ip";
        break;
    
    default:
        echo "error de contraseña";
        break;
}