<?php 
$imagen = $_GET['imagen'];
$letMeIn = $_GET['letMeIn'] ?? 0;
header('Content-Type: image/png');

if($letMeIn == 1){
$localizaimg = '/home/alumno/Documentos/Carpeta-oculta/' . $imagen;
    if(file_exists($localizaimg) && $letMeIn==1){
        imagepng(imagecreatefrompng($localizaimg));
    }else{
        http_response_code(404);
        imagepng(imagecreatefrompng('/home/alumno/Documentos/Carpeta-oculta/X.png'));
    }

}else{
    http_response_code(401);
    imagepng(imagecreatefrompng('/home/alumno/Documentos/Carpeta-oculta/X.png'));

}


?>