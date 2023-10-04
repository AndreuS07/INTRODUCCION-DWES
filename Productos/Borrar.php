<?php 
include('Producto.php');
include('conexion.php');

$id = $_GET['id'];

$resultado = $pdo->prepare('DELETE FROM Caracteristicas WHERE ID = ?');
$resultado->bindParam(1,$id);
$resultado->execute();

print "<br>" . "<br>";
print "Este producto se ha borrado";

?>