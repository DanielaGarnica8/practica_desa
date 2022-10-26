<?php
    $edad=$_GET["edad"];
       if (isset($_GET["edad"])) {   //Verificar que edad se establece valor
        $edad=$edad*365; 
          echo "<h3 style=´text-align:center; ´> Los días vividos son $edad</h3>";

       }
?>