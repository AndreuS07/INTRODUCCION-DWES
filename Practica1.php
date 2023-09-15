<?php 
$title = "Desarrollo web con PHP 7";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $texto = "Hola mundo";
        echo $texto;
        ?>
<?php
echo "<table border=1>";
$contador=1;

for ($n1=1; $n1<=10; $n1++){
    echo "<tr>";
    for ($n2=1; $n2<=10; $n2++){
        echo "<td>", $contador, "</td>";
        $contador++;
}
echo "</tr>";
}
echo "</table>";

$i = 0;

while ($i <= 5) {

    echo $i++ . " ";

}; // Imprime "012345"

echo "\n";


?>


    </p>
    
</body>
</html>