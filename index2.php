<?php
$temperatura = htmlspecialchars($_GET["temp"]);
$humedad_relativa = htmlspecialchars($_GET["humr"]);
$humedad_suelo = htmlspecialchars($_GET["hums"]);
$radiacion = htmlspecialchars($_GET["radi"]);

try{
$file = '/var/www/html/people.txt';
$text = "$temperatura, $humedad_relativa, $humedad_suelo, $radiacion <br>\n";
echo $text;
file_put_contents($file, $text, FILE_APPEND | LOCK_EX);
file_put_contents($file, $text, FILE_APPEND | LOCK_EX);
}
catch (Exception $e)  
{ 
throw new Exception( 'Something really gone wrong', 0, $e);
}
echo file_get_contents($file);