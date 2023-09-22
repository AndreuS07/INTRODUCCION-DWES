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
    
    $Transporte = 
    ["Coche"=> "Medio de transporte con 4 ruedas i 3 o 5 puertas",
    "Moto"=> "Medio de transporte de dos ruedas",
    "Lancha"=> "Medio de transporte maritimo con uno o varios motores",
    "Avion"=> "Medio de transporte aereo con dos turbinas i dos alas"
    ];

    function comparar($pri, $sec){
        $a = strlen($pri);
        $b = strlen($sec);
        
        if ($a < $b){
            return 1;
        }else{
            return -1;
        }


    }
    
    uasort ($Transporte, 'comparar');
    print_r($Transporte)
    
    ?>
</body>
</html>