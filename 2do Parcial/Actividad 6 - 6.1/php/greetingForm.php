<?php
/* 
   Descripción: Compone los datos del formulario
   Autor: Daniela Garnica 
   Fecha: 12 Octubre 2022 
*/

//Contiene nombre de el formulario 
$name=$_POST["nombre"];
$edad=$_POST["edad"];
$telefono=$_POST["telefono"];


echo "Los datos son: ";
echo "<p>";
echo "$name";
echo "<p>";
echo "$edad";
echo "<p>";
echo "$telefono";
echo "<p>";
//Para regresar a formulario HTML
echo "<a href='../html/greetingForm.html'>Regresar</a>";

?>