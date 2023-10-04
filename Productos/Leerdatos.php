<?php 

include('Producto.php');
include('conexion.php');

$nombre = $_GET['nombre'];
$color = $_GET['color'];
$chip = $_GET['chip'];
$sensores = $_GET['sensores'];
$precio = $_GET['precio'];

$pdoSt = $pdo->prepare('INSERT INTO Caracteristicas ( Nombre, Color, Chip, Sensores, Precio) VALUES (?, ?, ?, ?, ?)');
$pdoSt->bindParam(1, $nombre);
$pdoSt->bindParam(2, $color);
$pdoSt->bindParam(3, $chip);
$pdoSt->bindParam(4, $sensores);
$pdoSt->bindParam(5, $precio);
$pdoSt->execute();

?>
