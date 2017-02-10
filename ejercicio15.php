<?php
$valor = (isset($_POST["num"]) ? $_POST["num"] : NULL);
$primo=0;
for($b = 1;$b < $valor; $b++){
    if($valor % $b == 0){
        $primo++;
    }
}
if($primo >= 2 ){
    print $num = "No es primo";
} else {
    print $num = "Es primo";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ejercicio 3 </title>
</head>

<body>
<form id="form1" name="form1" method="post" action="ejercicio15.php">


    <label>Ingrese numero : </label>
    <input type="text" name="num" id="num" />
    <button type="submit" value="1">ingresar</button>

    <br>


</form>
</body>
</html>
