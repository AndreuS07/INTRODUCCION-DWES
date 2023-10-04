<?php

include('Producto.php');
include('conexion.php');

$id = $_GET['id'];
$precio = $_GET['precio'];

$resultado = $pdo->prepare('UPDATE productos SET precio = ? WHERE id = ?');
$resultado->bindParam(1,$precio);
$resultado->bindParam(2,$id);

$resultado->execute();
?>