<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
    
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = filtrado($_POST["nombre"]);
    $email = filtrado($_POST["email"]);
    $educacion = filtrado($_POST["educacion"]);
    $imagen = filtrado($_POST["imagen"]);
}

?>

<?php if(isset($_POST["submit"])): ?>
<h2>Mostrar datos enviados</h2>
Nombre : <?= $nombre ?? "" ?> <br><br>
Email : <?= $email ?? "" ?> <br><br>
Educación : <?= $educacion ?? "" ?> <br><br>
Avatar : <?= $imagen ?? "" ?> <br> 

<?php endif; ?>
</body>
</html>