<?php  
$opciones = array(

PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_PERSISTENT => true

);

$pdo = new PDO('mysql:host=localhost;dbname=productos;charset=utf8','root','sa',
$opciones);

print("<h3>Mi web</h3>");
var_dump($pdo);


?>