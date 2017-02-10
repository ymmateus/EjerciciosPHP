<html>
<head><title>ejercicio5</title></head>
<body>
<form action="ejercicio5.php" method="post">
    <p>digite la edad de la persona1: <input type="number" name="edad1" required></p>
    <p>digite la edad de la persona2: <input type="number" name="edad2" required></p>
    <p>digite la edad de la persona3: <input type="number" name="edad3" required></p>
    <p>digite la edad de la persona4: <input type="number" name="edad4" required></p>

    <p>digite la estatura de la persona1: <input type="number" name="estatura1" required></p>
    <p>digite la estatura de la persona2: <input type="number" name="estatura2" required></p>
    <p>digite la estatura de la persona3: <input type="number" name="estatura3" required></p>
    <p>digite la estatura de la persona4: <input type="number" name="estatura4" required></p>
    <input type="submit">

</form>
</body>
</html>
<?php
$ed1=$_POST['edad1'];
$ed2=$_POST['edad2'];
$ed3=$_POST['edad3'];
$ed4=$_POST['edad4'];
$x=0;
$a=0;
$y=0;
$z=0;
if($ed1>18){
    print"la persona 1 es mayor de 18 años...<br>";
    $x=1;
}
else {
   $x=0;
}
if($ed2>18){
    print "la persona 2 es mayor de 18 años...<br>";
    $a=1;

}else{
    $a=0;
}
if($ed3>18){
    print "la persona 3 es mayor de 18 años...<br>";
    $y=1;

}else{
    $y=0;
}
if($ed2>18){
    print "la persona 4 es mayor de 18 años..<br>.";
    $z=1;

}else{
    $z=0;
}
$sumaM=$x+$a+$y+$z;
echo "<h3> la cantidad de personas mayores de 18 años,es:".$sumaM."</h3><br>";

$sumaE=$ed1+$ed2+$ed3+$ed4;
$promedio=$sumaE/4;

echo "<h3 style='color: darkred'>el promedio de las edades es:".$promedio."</h3>";

$es1=$_POST['estatura1'];
$es2=$_POST['estatura2'];
$es3=$_POST['estatura3'];
$es4=$_POST['estatura4'];

$sumaES=$es1+$es2+$es3+$es4;
$promedioES=$sumaES/4;

echo "<h3 style='color: darkred'>el promedio de las estaturas es:".$promedioES."</h3><br>";
$c=0;
$d=0;
$e=0;
$f=0;
if($es1>175){
    print"la estatura de la persona1 es mayor a 175cm<br>";
    $c=1;
}else{
    $c=0;
}
if($es2>175){
    print"la estatura de la persona2 es mayor a 175cm<br>";
    $d=1;
}else{
    $d=0;
}
if($es3>175){
    print"la estatura de la persona3 es mayor a 175cm<br>";
    $e=1;

}
else{
    $e=0;
}
if($es4>175){
    print"la estatura de la persona4 es mayor a 175cm<br>";
    $f=1;
}
else{
    $f=0;
}
$sumaME=$c+$d+$e+$f;
echo"<h3>la cantidad de personas que tiene una estatura mayor a 175cm, es:".$sumaME."</h3>";
?>