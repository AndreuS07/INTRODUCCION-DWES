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
    $server_host = $_SERVER['HTTP_HOST'];
    echo "<p><strong>Listado de los valores de los elementos de la matriz \$_SERVER obtenidos al acceder a $server_host </strong></p>";
    

    foreach($_SERVER as $key => $value){
        echo "$key = $value.<br>";
    }
    echo "<br>";

    foreach (getallheaders()as $key => $value){
        echo "$key = $value.<br>";
    }
    
    
    ?>
</body>
</html>