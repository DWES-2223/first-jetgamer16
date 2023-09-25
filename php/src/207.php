<!DOCTYPE html>
<html lang="en">
    <?php
        extract($_GET);
    ?>
<head>
    <meta charset="UTF-8">
    <title>Nombre</title>
</head>
<body>
    <?php
    if (!isset($numero1,$numero2,$numero3)) {
        echo "Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString";
    } else
    { ?>

    El nombre més gran entre <?= $numero1 ?>, <?= $numero2 ?> i <?= $numero3 ?> és el

    <?php
        echo ($numero1 > $numero2)
            ?(($numero1 > $numero3)
                ?$numero1:$numero3):
            (($numero2 > $numero3)
                ?$numero2:$numero3);
      }

    ?>

</body>
</html>
