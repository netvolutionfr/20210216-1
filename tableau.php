<?php
$lakers = array(
    "nom" => "Lakers",
    "ville" => "Los Angeles",
    "etat" => "Californie"
);
$hornet = array(
    "nom" => "Hornet",
    "ville" => "Charlotte",
    "etat" => "Caroline du Nord"
);
$celtics = array(
    "nom" => "Celtics",
    "ville" => "Boston",
    "etat" => "Massachusetts"
);
$equipes = array($lakers, $hornet, $celtics);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau de données</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<h2>Équipes de la NBA</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Ville</th>
            <th>Etat</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($equipes as $equipe) { ?>
        <tr>
            <td><?php echo $equipe["nom"]; ?></td>
            <td><?php echo $equipe["ville"]; ?></td>
            <td><?php echo $equipe["etat"]; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>