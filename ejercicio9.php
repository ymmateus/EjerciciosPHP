<?php
$ValorE = $_POST["valorE"];
$Impuesto1 = 300;
$SAT = 30;
$Impuesto2 = $ValorE * 0.05;
$Resultado = $ValorE + $Impuesto1 + $Impuesto2 + $SAT;




?>


<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 9 </title>
</head>
<body>
<h1>ejercicio 9</h1>
<form action="" method="post">
    <label for="">Digite el valor del equipo a comprar</label>
    <input type="number" name="valorE"  required >
    <button type="submit">VerPrecio</button> <br>

    <?php

    echo "El valor del impuesto es "."$".$Impuesto1."<br>";
    echo "El valor del SAT es "."$".$SAT."<br>";
    echo "El valor del impuesto (soldados) es "."$".$Impuesto2."<br>";
    echo "El valor total del equipo es "."$".$Resultado. "<br>";

    ?>
</form>
</body>
</html>