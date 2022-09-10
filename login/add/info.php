<?php


   $ahora = $_SERVER['PHP_SELF'];
   $ser = $_SERVER['SERVER_NAME'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $viene = $_SERVER['HTTP_REFERER']; 
   $nav = $_SERVER['HTTP_USER_AGENT'];

  
   echo 'IP es: '.$ip.' <br/> 
   Vienes de: '.$viene.' <br/> 
   Navegador: '.$nav.' <br/>
   Estas en: '.$ahora.' <br/>
   Servidor es: '.$ser.'';

