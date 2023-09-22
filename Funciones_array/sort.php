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
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

$original = $edades; 

ksort($original);
print("Array ordenado por nombre ascendente: ");
print_r($original);

asort($original);
print("Array ordenado por edad ascendente: "); 
print_r($original);

krsort($original);
print("Array ordenado por nombre descendente: ");
print_r($original);

arsort($original);
print("Array ordenado por edad descendente: ");
print_r($original);

?>
</body>
</html>