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
    
    $cadenas = array ("Cielo", "Montaña", "Edificio", "Astronauta", "Mujer", "Dispositivo");

    function callongitudes($cadena){
       return strlen($cadena);
    }

    $longitudes = array_map('callongitudes', $cadenas);

    $longmax = max($longitudes);
    $longmin = min($longitudes);

    echo ("La cadena mas corta es: " . $longmin. "<br/>");
    echo ("La cadena mas larga es: " . $longmax);
    
    ?>
</body>
</html>