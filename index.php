<?php
//Realizo la autocarga de clases del directorio class
$carga = fn($clase) =>"";




//Inicializo variables con los valores del array de imágenes
$idiomas=[];
$categorias=[];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Datos Examen</title>
</head>
<body>
<form action="evaluar.php" method="post">
    <fieldset>
        <legend>Selecciona idioma para empezar</legend>


        <input type="submit" value="Empezar" name="submit">

    </fieldset>

</form>

</body>
</html>
