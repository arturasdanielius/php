<?php

$klaida = '';
$duomenuSarasas = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
if(empty($duomenuSarasas)){
    $klaida = 'vartotoju sarasas tuscias';
}
print_r($duomenuSarasas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bank1.css">
    <title>Saskaitu sarasas</title>
</head>
<body>
    <!--1. Sąskaitų sąrašai su linko/mygtukais “ištrinti”, “pridėti lėšų” ir “nuskaičiuoti lėšas” į puslapius-->
    <h1>Vartotojų sąrašas</h1>
    <p><?= $klaida ?></p>
    <?php foreach ($duomenuSarasas as $index => $val): ?>
    <form class="container" method="get">
        <?php foreach($val as $i => $a): ?>
            <li><span><?= $i?> : </span><span><?= $a ?></span></li>
            <?php endforeach ?>
            <a class="btn" href="http://localhost/php/bankas1.php/istrinti.php?index=<?= $index?>">Išrinti vartotoją</a>
            <a class="btn" href="http://localhost/php/bankas1.php/pridetiLesu.php?index=<?= $index?>">Pridėti lėšų</a>
            <a class="btn" href="http://localhost/php/bankas1.php/nuskaiciuotiLesas.php?index=<?= $index?>">Nuskaičiuoti lėšas</a>
    </form>
    <?php endforeach ?>
</body>
</html>