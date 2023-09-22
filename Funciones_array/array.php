<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de arrays</title>
    
</head>
<body>
<?php
$nombres = array ("Adrian", "Victor", "Juan", "Andreu", "Maria");

$contar = count($nombres). "<br>";
echo "Cantidad de nombres: " . $contar;

$mostrar = implode(" ", $nombres). "<br>";
echo "Nombres: " . $mostrar;

$ordenados = $nombres;
asort($ordenados);
print("Nombres ordenados alfabeticamente: ");
print_r($ordenados);

echo "<br>";

$alreves = $nombres;
$alreves = array_reverse($alreves);
print ("Nombres escritos al reves: ");
print_r($alreves);

echo "<br>";

$minombre = array_search('Andreu', $nombres);
print_r("Mi nombre esta en la posicion: " . $minombre . "<br>");

$alumnos = [
    array("id"=>"Id" , "nombre"=> "Nombre", "edad"=> "Edad"),
array("id"=>1 , "nombre"=> "Adrian", "edad"=> 25),
array("id"=>2 , "nombre"=> "Ana", "edad"=> 20),
array("id"=>3 , "nombre"=> "Pedro", "edad"=> 19),
array("id"=>4 , "nombre"=> "Vicente", "edad"=> 22),
];

echo '<table border="1">';
foreach ( $alumnos as $r ) {
        echo '<tr>';
        foreach ( $r as $v ) {
                echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
}
echo '</table>';

$nombrealu = array_column($alumnos, "nombre");
print("Array indexado: ");
print_r($nombrealu);

echo "<br>";

$numeros =[6,4,10,5,7,2,5,7,8,9];
$sumarray = array_sum($numeros);
print_r("La suma del array es: " . $sumarray);

?>
</body>
</html>