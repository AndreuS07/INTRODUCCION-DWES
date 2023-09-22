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
   
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
        $password = "";

        for($i=0; $i<$upper; $i++){
            $mayuscula=chr(rand(65,90));
            $password= $password.$mayuscula;
        }
        for($i=0; $i<$lower; $i++){
            $minuscula=chr(rand(97,122));
            $password= $password.$minuscula;
        }
        for($i=0; $i<$numeric; $i++){
            $numero=chr(rand(48,57));
            $password= $password.$numero;
        }
        for($i=0; $i<$other; $i++){
            $otros=chr(rand(33,47));
            $password= $password.$otros;
        }

        return $password;

        
    }print(rand_Pass());

    ?>
    
</body>
</html>