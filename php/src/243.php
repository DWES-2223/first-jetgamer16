<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Quantitat Dinero</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        extract($_POST);
        if ($pesetes > 0){
            $euros = peseta2euros($pesetes);
            $pesetes = 0;
        } else {
            $pesetes = euro2pesetes($euros);
            $euros = 0;
        }
    } else {
        $pesetes = 0;
        $euros = 0;
    }
?>
<form method="post" action="243.php">
    <div class="form-group row">
        <label for="nom" class="col-4 col-form-label">Quantidad en pesetas</label>
        <div class="col-8">
            <div class="input-group">
                <input id="pesetes" name="pesetes" placeholder="Escriu la cantidad de pesetas" type="text"  class="form-control" value="<?= $pesetes ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nom" class="col-4 col-form-label">Quantidad en euros</label>
        <div class="col-8">
            <div class="input-group">
                <input id="euros" name="euros" placeholder="Escriu la quantidad de euros" type="text"  value="<?= $euros ?>" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</body>
</html>