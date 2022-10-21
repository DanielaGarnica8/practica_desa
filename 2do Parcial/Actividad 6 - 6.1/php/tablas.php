<?php
/* 
   Descripción: Compone los datos del formulario
   Autor: Daniela Garnica 
   Fecha: 12 Octubre 2022 
*/

//Contiene datos del formulario 
$tabla=$_POST["num"];


echo "<h1>Tabla de Multiplicar de $tabla</h1>";
  for ($i=1; $i<=10; $i++) {
        echo "$i*$tabla= ", $i*$tabla, "<br>"; 
}

echo "<p>";

//Para regresar a formulario HTML
echo "<a href='../html/tablas.html'>Regresar</a>"


