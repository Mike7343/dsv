<?php
/* $colors = array("red","green","blue","yellow");
foreach($colors as $value){
    echo "$value <br>";
} */

/* $cadena = "Maggie,Panqué,Guayaba";
$separador = ",";
$separada = explode($separador, $cadena);
var_dump($separada); */


$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // mostrará @example.com

/* $user = strstr($email, '@', true); // Desde PHP 5.3.0
echo $user; // mostrará name */

?>