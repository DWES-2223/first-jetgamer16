<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array números aleatorios</title>
</head>
<body>
<ul>
    <?php
    for ($i=0; $i<50; $i++){
        $num[$i] = rand(0,99);
    }
    foreach ($num as $numero){
        echo $numero;
    }
    "\n"
    ?>

</ul>
</body>
</html>