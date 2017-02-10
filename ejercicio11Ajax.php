
<html>
<head>
    <script src="js/jquery-3.1.1.js" ></script>
    <title></title>
    <script >
        function Oprecion() {
            var Rt = $("#result").val();
            $.ajax({
                method: "POST",
                url: "Ejercicio11.php?logica="+Rt,
                data: {result: Rt}
            })

                .done(function( msg ) {

                    texto = document.getElementById("text")
                    texto.innerHTML =  msg ;


                });
        }
    </script>

</head>
<body>
<h1>Ingrese su Nota</h1>
<input type="text" id="result">
<input type="button" onclick="Oprecion()" value="Resultado">
<div><a id="text"></a></div>
</body>
</html>