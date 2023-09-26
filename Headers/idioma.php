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

$idiomas =[
    "es" => "Esta es mi pagina en español",
    "en" => "This is my web page in english",
    "fr" => "Ceci est mon site Web en français"
];

    $idiomadefect= 'en';

    $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
   
    if(isset($idioma)){
        print $idiomas[$idioma];
    }
    else{
        print $idiomas[$idiomadefect];
    }
    
    ?>
</body>
</html>