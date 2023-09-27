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
    header('Content-Type: application/zip');
    
    header ('Content-Length: 1000000');
    
    header ('Content-Disposition: attachment; filename="download.zip"');
    
    for($i =0; $i < 1000; $i++){
        echo str_repeat(".", 1000);

    }
    usleep(50000);
    
    ?>
</body>
</html>