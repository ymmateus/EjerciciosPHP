<?php

$dias =  800;
$horas =  $dias * 24;
$minutos =  $horas * 60;
$segundos = $minutos * 60;
$dias = $dias * 3600;
$velocidad = 299792.458;
$distancia = ($velocidad * $segundos);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ejercicio 3 </title>
</head>

<body>

<?php
echo "la distancia recorrida en " .$dias. "es de ".$distancia."kilometros";
?>

</body>
</html>
