<?php
$istrinta = '';
if(isset($_GET)){
    $index = $_GET['index'];
}


    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
        if($i == $index){
            if($a['pinigai'] == 0){
            unset($data[$i]);
            $data = array_values($data); // kad datoj jsone atsirastu naujas masyvas;
            file_put_contents(__DIR__ . '/data.json', json_encode($data));            
            $istrinta = $a['vardas'] . "\r" . $a['pavarde'] ."\r" . 'Vartotojas istrintas';
            print_r($istrinta);
        }else{
            $istrinta = 'Klaida, negalima istrinti, saskaitoje yra pinigu';
            
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
    <title>Istrinti</title>
</head>

<body>
    <section>
        <!-- <?php include 'header.php' ?> -->
    </section>
    <section class="info-new">
        <div>
            <h1><?= $istrinta?></h1>
        </div>
        <div class="info-list">
            <a class="btn" href="http://localhost/php/bankas1.php/sarasas.php">Grižti į
                sąrašą</a>
        </div>
    </section>
</body>

</html>