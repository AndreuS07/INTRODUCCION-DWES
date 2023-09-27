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
    
    $almacen=[
"0" => "SAMSUNG GALAXY 21",
"1" => "SAMSUNG GALAXY 22",
"2" => "SAMSUNG GALAXY 23",
"3" => "SAMSUNG GALAXY 24"
    ];
  
$producto = $_GET['id'];

    if(isset($almacen[$producto]) && isset($producto)){
echo("El producto esta en tienda. ". "<br>");
        print $almacen[$producto];

    }else{
       http_response_code(404);
        echo ("El producto seleccionado no existe.");
    }

    
    ?>
</body>
</html>