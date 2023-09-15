<?php 
$primerValor = 1;

if(isset($_GET['x']))
$primerValor = $_GET['x'];

$primerValor = isset ($_GET['x']) ? $_GET['x']: 1;

$segundoValor = $_GET['y'] ?? 1;

echo "El resultado es " . $primerValor * $segundoValor;


?>