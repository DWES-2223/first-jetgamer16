<!DOCTYPE html>
<html lang="en">
<?php
    extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <title>Mostar formulari compra</title>
</head>
<body>
<?php
        if (isset($quantitat) && is_numeric($quantitat) && $quantitat > 0) { ?>
            <form method="post" action="244b.php">
                <?php for($i=0; $i<$quantitat; $i++){ ?>
                        <div class="form-group row">
                            <label for="nombre<?= $i ?>" class="col-4 col-form-label">Nom Producto</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="nombre<?= $i ?>" name="nombre<?= $i ?>" placeholder="Nom del producte" type="text" required="required" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="precio<?= $i ?>" class="col-4 col-form-label">Precio</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="precio<?= $i ?>" name="precio<?= $i ?>" placeholder="Precio del producto" type="text" required="required" class="form-control">
                                </div>
                            </div>
                        </div>
                <?php } ?>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

    <?php } else {
            echo 'Dades incorrectes';
        }
   ?>
</body>
</html>