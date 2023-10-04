<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario2</title>
    
    <style>

    </style>
</head>
<body>
    <h2><strong>Formulario de registro</strong></h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Nombre de usuari@ <br>
    <input type="text" name="nombre" maxlength="50"><br><br>
  
    Correo Electrónico <br>
    <input type="email" name="email"><br><br>

    Contraseña <br>
    <input type="password" name="contraseña"> <br><br>

    Confirma la contraseña <br>
    <input type="password" name="contraseña2"> <br><br>

    <input type="submit" name="submit" value="REGISTRARSE">

    ¿Ya eres miembro?<a href="">Acceso usuari@s</a>

</form>
</body>
</html>
