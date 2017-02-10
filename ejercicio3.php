<?php
$rad = $_POST["radio"];
$radio = $rad * $rad;
$area = 3.14 * $radio;
$longitud = $rad * 2;


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ejercicio 3 </title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

    <h2> Por medio de un menú dar al usuario la opción de
        seleccionar círculo o circunferencia si selecciona
        círculo calcular su área. A=PI*r^2, si selecciona
        circunferencia calcular su longitud </h2>

    <p></p>
    <label>Ingrese el valor del radio : </label>
    <input type="text" name="radio" id="radio" />
    <label for="opcion"><br />
        <br />
        opciones :  </label>
    <button type="submit" value="1">circulo</button>
    <button type="submit" value="2">circunferencia</button>
    <br>
    <?php
    echo "el area es"."". $area ."<br>";
    echo "la longitud es "."".$longitud."<br>"
?>

</form>
</body>
</html>