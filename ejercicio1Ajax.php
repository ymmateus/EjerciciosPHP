<html>
<head>
    <title></title>
    <script src="js/jquery-3.1.1.js"></script>
    <script>

        function Operaciones (tipo){
            var radio = $("#radio").val();
            $.ajax({
                method: "POST",
                url: "EjerciciosPHP.php?EjerciciosPHP="+tipo,
                data: { Radio: radio}
            })

                .done(function( msg ) {
                    if (tipo == "Area"){
                        alert("El Area del Circulo con Radio "+radio+" es de: "+ msg);
                    }else{
                        alert("La Longitud del Circulo con Radio "+radio+" es de: "+ msg);
                    }

                });
        }

    </script>
</head>
<body>
<form action="" method="POST">
    Radio: <input type="text" id="radio" name="radio"><br>
    <input type="button" onclick="Operaciones('Area')" value="Calcular Area">
    <input type="button" onclick="Operaciones('Longitud')" value="Calcular Longitud">
</form>
</body>
</html>