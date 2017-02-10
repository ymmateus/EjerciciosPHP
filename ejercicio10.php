<?php

$dia = $_POST["dia"];
$mes = $_POST["mes"];
$año = $_POST["año"];
if ($dia = 1-30 && $mes = 1-12 && $año=0000-3000 )
{
    $result = "La fecha "." ". $dia."/".$mes."/".$año."Es Correcta";
}
else{

    $result = "La fecha "." ". $dia."/".$mes."/".$año."Es Incorrecta";
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 10</title>
</head>
<body>
<h1>ejercicio 10</h1>
<form action="" method="post">
    <label for="">Digite un dia del año(1-31)</label>
    <input required type="number" id="numero" name="dia" ><br>
    <label for="">Digite un mes del año (1-12)</label>
    <input required type="number" id="numero" name="mes" ><br>
    <label for="">Digite un  año(0-&)</label>
    <input required type="number" id="numero" name="año" ><br>
    <button type="submit">VerFechaCorrecta</button> <br>

    <?php
    echo $result;
    ?>

</form>
</body>
</html>