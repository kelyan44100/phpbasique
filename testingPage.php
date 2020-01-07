<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Insertion de mes plugins bootstrap, jquery... -->
    <?php include_once ('Menu/insertPlugin.php') ?>
    <title>Ma testing page</title>
</head>
<body>
<?php include_once('Menu/MenuTop.php') ?>

<div id="monForm">
    <form action="Actionneur/testingForm.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nameTesting">Nom du test</label>
                <input type="text" class="form-control" id="nameTesting" name="nameTesting" placeholder="Nom du testing">
            </div>
            <div class="form-group col-md-6">
                <label for="nombreTesting">Nombre</label>
                <input type="number" name="nombreTesting" class="form-control" id="nombreTesting" placeholder="Nombre pour testing">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="testingButton">Insertion !!!</button>
    </form>
</div>

</body>
</html>