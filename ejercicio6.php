<?php

$cnum = 0;
$result = 0;
$d1 = 0;
$d2 = 0;
$d3 = 0;
$num = $_POST["num"];

$cnum = $num;
$d3 = $cnum % 10;
$cnum = $cnum / 10;
$d2 = $cnum % 10;
$cnum = $cnum / 10;
$d1 = $cnum % 10;
$result = $d1 + $d2 * 10 + $d3 * 10^2;

    if ($result = $num){

        $capi = "El numero es capicua";

    }
    else{
        $capi = "El numero no es capicua";

    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ejercicio 3 </title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">


    <label>Ingrese numero : </label>
    <input type="text" name="num" id="num" />
    <button type="submit" value="1">capicua?</button>

    <br>
    <?php
    echo  $capi ."<br>";

    ?>

</form>
</body>
</html>
