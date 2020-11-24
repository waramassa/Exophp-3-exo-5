<?php
$departement = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas de Calais', '80' => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exo5</title>
</head>
<body>
    <?php
    foreach ($departement as $key => $element){ ?>
    <p> Le département de <?php echo $element; ?> a le numéro
    <?= $key;?> ! </
    <?php } ?>
</body>
</html>