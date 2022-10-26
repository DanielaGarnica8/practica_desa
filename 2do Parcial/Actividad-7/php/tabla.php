<?php
        $columna=$_GET["columna"];
        $renglon=$_GET["renglon"];

        echo "<h1> <center>  Tabla </center></h1>";
        echo "<p>";
        echo "<p>";
        echo "<p>";

        
        if($renglon&&$columna&&isset($_GET["columna"])){
            echo "<p>";
            echo "<p>";
            echo "<center>";
            echo "<table aling=center border=1px width=15%>";
            
              for($ren=1; $ren <=$_GET["renglon"]; $ren++) {
                echo "<tr>";
                    for($col=1; $col <=$_GET["columna"]; $col++) {
                        echo "<td>";
                        echo "$ren$col";  
                        echo "</td>"; 
                    }
                echo "</tr>";    
              }
            echo "</table>";
            echo "</center>";
        }

?>