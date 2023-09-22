<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en cadena</title>
</head>
<body>
    
<?php 

$nombre = $_GET ['nombre'] ?? "Andreu";
$Longitud;
$Mayusculas;
$Minusculas;
$Prefijo = $_GET ['prefijo'] ?? "";
$Contar;
$Posicion;
$Sustituir;
$url = 'http://username:password@hostname:9090/path?arg=value';
$Protocolo;
$Usuario;
$Path;
$Query;


$nombre = trim ($nombre);
$Longitud = strlen($nombre);
$Mayusculas = strtoupper($nombre);
$Minusculas = strtolower($nombre);
$pref = strpos ($nombre, $Prefijo);
$Contar = substr_count((strtoupper($nombre)), 'A');
$Posicion = stripos(strtolower($nombre), 'a');
$Sustituir = str_ireplace('o', '0', $nombre);
$Protocolo = parse_url($url, PHP_URL_SCHEME);
$Usuario = parse_url($url, PHP_URL_USER);
$Path = parse_url ($url, PHP_URL_PATH);
$Query = parse_url($url, PHP_URL_QUERY);



echo "<b>" . "Nombre: " ."</b>". $nombre . "<br/>";
echo "Longitud: " . $Longitud . "<br/>";
echo "Nombre en mayusculas: " . $Mayusculas . "<br/>";
echo "Nombre en minusculas: " . $Minusculas . "<br/>";
if(isset($Prefijo)){
if($pref === false){
print "No empieza por el prefijo";
}else{
 print "Si que empieza por el prefijo";
}
}
echo "<br/>";
echo "Numero de veces que aparece la 'a': " . $Contar . "<br/>";
echo "La posicion de la primera 'a' es: " . $Posicion . "<br/>";
echo "Sustitucion de o por 0's: " . $Sustituir . "<br/>";
echo "El protocolo utilizado es: " . $Protocolo . "<br/>";
echo "El usuario utilizado es: " . $Usuario . "<br/>";
echo "El path utilizado es: " . $Path . "<br/>";
echo "El query utilizado es: " . $Query;


?>

</body>
</html>