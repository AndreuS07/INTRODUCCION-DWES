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
$color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');

echo '<ul>'; 
foreach ( $color as $pc => $url ) {
     echo '<li>';
     echo '<a href='.$url.'>'.$pc.'</a>';
     echo '</li>';
        
}
echo '<ul>'; 

?>
</body>
</html>