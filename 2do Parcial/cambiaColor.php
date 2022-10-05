<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
</head>
<body>
    <h1 id="header" > Soy una simple página!!! =( =) =(  </h1>
    <button id="btnrojo" style="background-color: red;" onmouseover="rojo()">Red</button>
    <button id="btnazul" style="background-color: aqua;" onmouseover="agua()">Aqua</button>
    <button id="btnnaranja" style="background-color: orange;" onmouseover="naranja()">Orange</button>



    <script>
        function rojo(){
           //alert("Outchh Soy Rojo")
           document.getElementById("header").style.backgroundColor ="red";
        }

        function agua(){
           //alert("Outchh Soy Agua")
           document.getElementById("header").style.backgroundColor ="aqua";
        }
        function naranja(){
            //alert("Outchh Soy Naranja")
            document.getElementById("header").style.backgroundColor ="orange";
        }
    </script>
</body>
</html>