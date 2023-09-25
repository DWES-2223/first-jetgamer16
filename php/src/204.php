<?php
if(isset($_GET['edat'])){
    $edat = $_GET['edat'];

    $anyActual = date("Y");

    echo "Edad actual: " . $edat . " anys<br>";
    echo "Edad dins de 10 anys: " . ($edat + 10) . " anys. Es l'any " . ($anyActual+10) ."<br>";
    echo "Edad fa 10 anys: " . ($edat - 10) . "anys. Es l'any " . ($anyActual-10) . "<br>";
    echo "Any de jubilacion a los 67: " . ($anyActual - $edat + 67);
} else {
    echo "Posa la teu edat actual a la variable edat pel QueryString";
}
?>

