<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Numeros pares</title>
</head>
<body>
<ul>
<?php
    for ($i=2; $i<52; $i=$i+2){
        printf('<li>%d</li>',$i);
    }
?>
</ul>
</body>
</html>