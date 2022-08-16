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
    <form method="get">
        <h1>Vartotojų sąrašas</h1>  
        <?php foreach (json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $index => $value); ?>
            <a href="#"> Išrinti vartotoją</a>
            <a href="#">Pridėti lėšų</a>
            <a href="#">Nuskaičiuoti lėšas</a>
    </form>

</body>
</html>