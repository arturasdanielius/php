<?php

//jei nera - sukuriamas data.json failas
if (!file_exists(__DIR__ . '/data.json')) {
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}

if('POST' == $_SERVER['REQUEST_METHOD']) {
    $naujasVartotojas = $_POST ?? 'Klaida, iveskite varda';

    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);

    $data[] = $naujasVartotojas;

    file_put_contents(__DIR__ . '/data.json', json_encode($data));

    header("Location: http://localhost/php/bankas1.php/naujaSaskaita.php");
    die;

}

//sugeneruojam LT saskaita su LT pradzioje ir 18 atsitiktiniu skaiciu 

$saskaita = '';
for($i=0; $i<18; $i++){
    $saskaita .= rand(0,9); // $saskaita.rand(0,9);
}

$IBAN = 'LT'.$saskaita;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>New Account</title>
</head>
<body>
    <!--1. Nauja sąskaita sukuriama su pradine 0 suma, o lėšos pridedamos/nuimamos pagalbiniuose puslapiuose.Naujos sąskaitos sukūrimas (įvedami duomenys: vardas, pavardė, sąskaitos numeris, asmens kodas)-->
    <div class="info-new">
        <h1>Sukurti naują sąskaitą</h1>
        <fieldset>
            <?php
            print_r($_POST);
            ?>
            <form class="info-new" action="http://localhost/php/bankas1.php/naujaSaskaita.php" method="post">
            <h2>Įveskite informaciją</h3>
            <label for="fname">Vardas</label>
            <input type="text" id="fname" name="vardas" value="" placeholder="Vardas" require>
            <label for="lname">Pavardė</label>
            <input type="text" id="lname" name="pavarde" value="" placeholder="Pavardė"/>
            <label for="ak">Asmens kodas</label>
            <input type="number" id="ak"name="asmensKodas" value="" placeholder="Asmens kodas"/>
            <input type="text" name="iban" value="<?= $IBAN;?>" placeholder="IBAN" hidden/>
            <input type="text" name="pinigai" value="0" placeholder="pinigai" hidden/>
            <button type="submit">Sukurti</button>
            </form>
        </fieldset>
    </div>
    
</body>
</html>