<html>
<head>
    <title>"Array Aleatorios"</title>
<body>
<?php
$mayor = 0;
$menor = 0;
$m_aritmetica = 0;

for ($i=0; $i<33; $i++){
    $numeros[$i] = rand(0,100);
}
?>
<?php
echo "El màxim és: ". max($numeros)."\n" ;
echo "El mínim és:" . min($numeros)."\n" ;
echo "La mitjana és:". array_sum($numeros)/count($numeros);
?>
</body>
</head>
</html>