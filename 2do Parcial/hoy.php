<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Fecha de hoy</title>
</head>
<body style="background-color:wheat">
      <?php
       echo "<h3>";
       echo "La feha del día de hoy es: ";
       echo "</h3>";
       echo "<center>";
       echo "<h1>";
       echo date("d-m-y");
       echo "</h1>";
       echo "</center>";
      ?>
</body>
</html>