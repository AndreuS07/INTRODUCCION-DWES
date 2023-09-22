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

$array = array("Buenos", "dias", "hoy", "es", "22/09/2023");
$particiones = partlist($array);

    function partlist($arr) {
    $resultado = array();
    $n = count($arr);
    
    for ($i = 1; $i < $n; $i++) {
        $particion1 = implode(" ", array_slice($arr, 0, $i));
        $particion2 = implode(" ", array_slice($arr, $i));
        $resultado[] = array($particion1, $particion2);
    }
    
    return $resultado;
}

foreach ($particiones as $particion) {
    print_r($particion);
    echo "<br/>";
}
 ?>
</body>
</html>