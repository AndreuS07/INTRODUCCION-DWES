<?php 
$modeu = $_GET["mode1"] ?? ($_COOKIE["modeu"] ?? "light");
setcookie("modeu" ,$modeu, time() + 30*24*60*60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    .light{
        background-color: white;
    }
    .dark{
        background-color: darkgray;
    }
    </style>
</head>
<body class="<?=$modeu ?>">
    <a href="?mode1=light">Claro</a>
    <a href="?mode1=dark">Oscuro</a>

</body>
</html>