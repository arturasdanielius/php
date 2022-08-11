<?php

$linkas1 ='Raudona';

$linkas2 = 'Juoda';



if($_GET['color'] ?? null == 1){
    $bgColor = 'style="background-color: #000"';
}else{
    $bgColor = 'style="background-color: #FF0000"';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color change</title>
</head>
<body <?= $bgColor ?>>
<!--1. Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.-->



<a href="http://localhost/php/NamuDarbai/nd7webmech1.php/?color=1"><?= $linkas1 ?></a>

<a href="http://localhost/php/NamuDarbai/nd7webmech1.php/?"><?= $linkas2 ?></a>


</body>
</html>