<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
    
<?php 
$color = array('blanco', 'verde', 'rojo');

foreach ( $color as $pc ) {
        echo '<ul>';
                echo '<li>'.$pc.'</li>';
        echo '</ul>';
}

?>
</body>
</html>