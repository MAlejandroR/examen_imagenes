<?php
//Realizo la autocarga de clases del directorio class
$carga = fn($clase) =>"";

//Escribe los requisitos que implementas en cada grupo de instrucciones

$opcion = $_POST['submit'] ?? "";
switch ($opcion) {
    case "Empezar":
        break;


}

//Aquí generaremos valores para la vista


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Examen</title>
</head>
<body>
<fieldset>
    <legend>Pregunta número 1</legend>
    <form action="evaluar.php" method="post" >

        <input type="submit" value="Evaluar">
    </form>
</fieldset>

</body>
</html>