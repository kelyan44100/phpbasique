<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Insertion de mes plugins bootstrap, jquery... -->
    <?php include_once ('Menu/insertPlugin.php') ?>
    <title>Accueil</title>
</head>
<body>
<?php include_once('Menu/MenuTop.php') ?>
<h1>Bienvenue</h1>

<?php $test = rand(1,5) ?>
<h2 id="<?php echo 'test' . $test ?>">Je suis un test</h2>

<div id="mabox">
    <p>Ma shadow box</p>
</div>

</body>
</html>