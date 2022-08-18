<?php

require __DIR__ . '/Nso.php';
require __DIR__ . '/Tv.php';

echo '<pre>';


// $nso1 = new Nso;
// $nso2 = new Nso;
// $nso3 = new Nso;

$samsung = new Tv('silver', '40"');
$lg = new Tv('black', '60"');
$silelis = new Tv('yellow', '100"');

// var_dump($nso1);
// var_dump($samsung);
var_dump($lg);

$lg->color = 'black';
$silelis->color = 'yellow';

echo $samsung->color;
echo "\n";
echo $lg->color;
echo "\n";
echo $silelis->color;
echo "\n";
echo $silelis->size;
echo "\n";

echo $silelis->show();
echo "\n";


$silelis->showColor();
echo "\n";
$lg->showColor();
echo "\n";
$samsung->showColor();
echo "\n";

$samsung->size;
echo "\n";

