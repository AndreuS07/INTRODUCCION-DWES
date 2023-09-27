<?php 
 $productos = ["1" => "Tesla X", "2" => "Yaris 8", "3" => "BMW X8"];
    
    $filename = "productos.csv";

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

  
foreach ($productos as $producto => $precio) {
    echo($producto . "-" . $precio .";");
}
    

    

    ?>
