<!DOCTYPE html>
<html lang="en">
<?php
extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <title>Rellotge</title>
</head>
<body>
<?php
if (isset($hora,$minut,$segon)){
    $hora = $hora ?? 0;
    $minut = $minut ?? 0;
    $segon = $segon ?? 0;

    $segon += ($minut * 60) + ($hora * 3600);
    $segon++;
    $segon = $segon % 86400;
    $hora = intval($segon / 3600);
    $segon %= 3600;
    $minut = intval($segon / 60);
    $segon %= 60;

    printf("%02d:%01d:%01d", $hora, $minut, $segon);
} else {
    echo "Posa les variables hora, minut i segon pel QueryString";
}
?>
</body>
</html>
