<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript">
        function play(opcion) {
            var num = $("#n").val();
            $.ajax({
                method: "POST",
                url: "Ejercicio12.php?Juego="+opcion,
                data: { }
            })
                .done(function( msg ) {
                    if (opcion == "load"){
                        alert("Se ha generado un nuevo número para adivinar");
                    }else{
                        alert("");
                    }
                });
        }
    </script>
</head>
<body>
<h1>Adivinar Numero</h1>
<p>El juego consta en adivinar un numero de 0 al 50.</p>
<p>Cuando ele numero sea adivinado se cargara el siguiente</p>
<p>Dar click en el boton Load para generar el numero para adivinar</p>
<form method="post" action="Ejercicio12.php">
    <input type="button" id="load" onclick="play('load')" value="Generar">
    <br>
    <input type="number" id="n">
    <input type="button" id="adivinar"onclick="play('Intento')" value="Probar">
</form>
</body>
</html>