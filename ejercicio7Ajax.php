<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script src="js/jquery-3.1.1.js"></script>
    <script>
        function Oper(){
            var kmts = $("#Kilometros").val();
            $.ajax({
                method: "POST",
                url: "Ejercicio7.php?Prueba=" +kmts,
                data: { Kilometros: kmts}
            })
                .done(function( msg ) {
                    alert("Con "+kmts+ " Kilometro(s) su Automovil Gasta: " + msg + " Litro(s) de Gasolina");
                });
        }
    </script>
</head>
<body>

<form method="post" action="Ejercicio7.php">
    <label>Digite Kilometros Recorridos:</label>
    <br>
    <input type="text" id="Kilometros">
    <br>
    <input type="button" id="btn" onclick="Oper()" value="Resultado">
    <div><a id="caja"></a></div>
</form>
</body>
</html>
