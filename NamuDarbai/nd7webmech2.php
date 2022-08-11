<?php

$chooseColor = $_GET['color'] ?? 'pink';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color change</title>
</head>
<body style="background-color:#<?= $chooseColor ?>">
<!--2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
-->

<a href="http://localhost/php/NamuDarbai/nd7webmech2.php/?color=ff1234">Dream color</a>

</body>
</html>