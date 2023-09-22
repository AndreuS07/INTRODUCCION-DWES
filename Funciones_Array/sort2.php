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
    $temperatura = "9 5 1 3 6 24 26 28 21 34";
    $dividir = [];
    $suma = 0;
    $max = [];
    $min = [];
    
    $dividir= explode(" ",$temperatura); 
    
    for ($i=0; $i<count($dividir); $i++){
        $suma += $dividir[$i];

        if ($i < 5){
            array_push($min,$dividir[$i]);

        }else{
            array_push($max,$dividir[$i]);

        }
    }
    
    $media = $suma/count($dividir);
    print("La media de las tempereturas es: ".$media. "<br/>");
    print("Temperaturas minimas: ");
    print_r($min);
    print('<br>'."Temperaturas maximas: ");
    print_r($max);
    
    ?>
</body>
</html>