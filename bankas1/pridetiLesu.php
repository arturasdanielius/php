<?php

if(isset($_GET)){
    @$index = $_GET['index'];
}

$klaida = '';
if('POST' == $_SERVER['REQUEST_METHOD']){
    $transakcija = $_POST['pinigai'];
    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
        if($index == $i){
            if(empty($transakcija)){
                $klaida = 'iveskite pinigu kieki';
        }else{
            $data[$i]['pinigai'] += $transakcija;
            file_put_contents(__DIR__ . '/data.json', json_encode($data));

            header('Location: http://localhost/php/bankas1.php/sekmingaiPrideta.php');
            die;    
            } 
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prideti lesu</title>
</head>
<body>
<section>
        <!-- <?php include 'header.php' ?> -->
    </section>
    <section>
        <div>
            <h1>Prideti pinigu:</h1>
            <div>
                <form action="" method="post">
                    <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a) : ?>
                    <?php if($i == $index) :?>
                    <?php foreach($a as $i => $val) : ?>
                    <li><span><?= $i?> : </span><span><?=$val?></span></li>
                    <?php endforeach ?>
                    <?php endif ?>
                    <?php endforeach ?>
                    <div>
                        <p>Prideti pinigu:</p>
                        <input type="number" name="pinigai" placeholder="Iveskite suma" />
                    </div>
                    <div>
                        <button class="btn" href="sekmingaiPrideta.php" type="submit">Prideti</button>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <a class="btn" href="http://localhost/php/bankas1.php/naujaSaskaita.php">Grižti į
                pradžia</a>
            <a class="btn" href="http://localhost/php/bankas1.php/sarasas.php">Grižti į
                sąrašą</a>
        </div>
    </section>

</body>
</html>