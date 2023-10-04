<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario2</title>
</head>
<body>
    <h2>Formulario:</h2>
    <form action="form.php" method="post">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Nombre:
    <input type="text" name="nombre" maxlength="50"><br><br>
  
    Email
    <input type="email" name="email"><br><br>

    Educación:
    <select name="educacion">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
        <option value="formacion-profesional">Formación profesional</option>
        <option value="universidad">Universidad</option>
    </select> 
    <br><br>
Avatar: 
<input type="file" name="imagen" />
 <br><br>

    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>


    
