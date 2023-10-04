<?php

include('Producto.php');
include('conexion.php');

$id = $_GET['id'];

$resultado = $pdo->prepare('SELECT * FROM Caracteristicas WHERE ID = ?');
$resultado->bindParam(1,$id);
$resultado->execute();

while($producto=$resultado->fetch()) {
    print "<br>" . "<br>";
    print "Nombre: " . $producto['Nombre'] . "<br>";
    print "Color: " . $producto['Color'] . "<br>";
    print "Chip: " . $producto['Chip'] . "<br>";
    print "Sensores: " . $producto['Sensores'] . "<br>";
    print "Precio: " . $producto['Precio'] . " $";
} 


?>