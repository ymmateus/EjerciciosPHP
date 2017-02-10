<?php
$numero1 = $_POST["numero"];

$result= alreves($numero1);


function alreves($numero){
    $reversa=0;
    //n= numero / reversa=0
    $reversa = $numero % 10;
    $numero = $numero / 10;
    //n=549 / reversa=2
    $reversa = $reversa * 10 + ($numero % 10);
    $numero = $numero / 10;
    //n=5, / reversa=294
    $reversa = $reversa * 10 + ($numero%10);
    $numero = $numero / 10;
    // n= 0 / reversa = 2945
    $reversa = $reversa * 10 + ($numero % 10);
    $numero = $numero / 10;
    // siguiente...
    $reversa = $reversa * 10 + ($numero % 10);
    $numero = $numero / 10;
    // siguiente....
    $reversa = $reversa * 10 + ($numero % 10);
    $numero = $numero / 10;

    return $reversa;
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
</head>
<body>
<h1>ejercicio 4</h1>
<form action="" method="post">
    <label for="">Digite un numero de 6 cifras</label>
    <input required type="number" id="numero" name="numero" >
    <button type="submit"> revertir   </button>

    <?php
    echo "numero revertido".$numero1."  "."el resultado es  ".$result;
    ?>

</form>
</body>
</html>

