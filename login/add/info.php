<?php


$ahora = $_SERVER['PHP_SELF'];
$ser = $_SERVER['SERVER_NAME'];
$ip = $_SERVER['REMOTE_ADDR'];
$viene = $_SERVER['HTTP_REFERER'];
$nav = $_SERVER['HTTP_USER_AGENT'];


echo 'IP es: ' . $ip . ' <br/> 
   Vienes de: ' . $viene . ' <br/> 
   Navegador: ' . $nav . ' <br/>
   Estas en: ' . $ahora . ' <br/>
   Servidor es: ' . $ser . '';

//Utilizamos api de geolocalizacion
$data = @file_get_contents("https://ipapi.com/ip_api.php?ip=" . $_SERVER['REMOTE_ADDR']);
$items = json_decode($data, true);

var_dump($items);


echo "<p>La ip es: " . $items['ip'];
echo $items["continent"];
echo ", ";
echo $items["name"];
echo "</p>";
