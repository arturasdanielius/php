<?php

echo '<pre>';

echo "start\n";

echo __DIR__ . '\inc.php';    

$data = require __DIR__ . '\d.php';

print_r($data);


//ikrausim txt faila
$datukas = file_get_contents(__DIR__ . '\labas.txt');

//jei desime paveiksliuka:
//header("Content-Type: image/jpeg"); aprasome ka daryti ir ko norime,
// tik echo gali buti viena karta

//$datukas = file_get_contents(__DIR__ . '\rose.jpg');  paveiksliukas;

print_r($datukas);



require __DIR__ . '\inc.php';
require __DIR__ . '\inc.php';
require __DIR__ . '\..\015\kitas.php';


echo "end\n";
// destytojo:
// echo '<pre>';

// echo "start\n";

// $data = require __DIR__ . '/d.php';

// header("Content-Type: image/jpeg");
// die;
// $data = file_get_contents(__DIR__ . '/rose.jpg');

// $x = ['labas' => 'pats tu labas'];

// $j = json_encode($x);

// file_put_contents(__DIR__ . '/x.json', $j);

// $j = json_decode(file_get_contents(__DIR__ . '/x.json'), 1);

// print_r($j);


// echo $data;
// echo '.';
// print_r($data);

// require __DIR__ . '/inc.php';
// require __DIR__ . '/inc.php';
// require __DIR__ . '/../015/kitas.php';


// echo "\nend\n";