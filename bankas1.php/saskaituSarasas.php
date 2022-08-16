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
    <!--1. Sąskaitų sąrašas su mygtuku “ištrinti” ir linku į “pridėti lėšų” ir “nuskaičiuoti lėšas” puslapius-->
    <form class="info-block" method="get">
        <h1>Vartotojų sąrašas</h1>  
        <?php foreach (json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $key => $val): ?>
        <?php foreach($val as $i => $a): ?>
            <li><?= $i. ': '.$a?></li>
            <?php endforeach ?>
            <a class="btn" href="#"> Išrinti vartotoją</a>
            <a class="btn" href="http://localhost/php/bankas1.php/pridetiLesu.php?key=<?= $key?>">Pridėti lėšų</a>
            <a class="btn" href="http://localhost/php/bankas1.php/nuskaiciuotiLesas.php?key=<?= $key?>">Nuskaičiuoti lėšas</a>
        <?php endforeach ?>
    </form>

</body>
</html>