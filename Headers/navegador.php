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

    $navegador = substr($_SERVER['HTTP_USER_AGENT'], 0, 7);
   
    if($navegador == "Mozilla"){
        echo "<p><strong>Bienvenido al navegador Mozilla </strong></p>";
    }
    else{
        echo "<p><strong>Este no es el navegador Mozilla</strong></p>";
        
    }
    
    ?>
</body>
</html>