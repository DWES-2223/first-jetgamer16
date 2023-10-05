<!DOCTYPE html>
<html lang="es">
<?php
include ('atletes.php');
include ('functions.php');
global $records;
?>
<body>
<?php
$fechas = array_column_ext($records,'data',-1);
$club = array_column_ext($records,'club',-1);
$ciudades = array_column_ext($records,'lloc',-1);
$nacimiento = array_column_ext($records,'natalici',-1);
$atletas = array_column_ext($records,'atleta',-1);

$recordMasViejo = vell($fechas);
$clubMasLaureado = laureado($club);
$ciutatMasTitulos = laureado($ciudades);
$personaMasLaureada = laureado($atletas);
$atletaMasJoven = jove($nacimiento,$fechas);
$nombreAtletasMasJoven = '';
foreach ($records as $record => $datos){
    if($record == $atletaMasJoven[0]){
        $nombreAtletasMasJoven = $datos['atleta'];
    }
}
?>
<p>Record més antic:  <?= $recordMasViejo ?></p>
<p>Club amb més títols: <?= $clubMasLaureado ?></p>
<p>Persona amb més records: <?= $personaMasLaureada ?> </p>
<p>Ciutat més propicia: <?= $ciutatMasTitulos?></p>
<p>Mes jove en aconsegir el record: <?= $nombreAtletasMasJoven?> - <?= $atletaMasJoven[1]?> anys</p>
<?php
include ('270a.php');
?>
</body>
</html>